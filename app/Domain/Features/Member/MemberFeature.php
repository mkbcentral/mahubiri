<?php

namespace App\Domain\Features\Member;

use App\Domain\Contract\Member\IMember;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Queue;

class MemberFeature implements IMember
{
    private static string $search;
    /**
     * @param array $input
     * @return Member
     */
    public static function create(array $input): Member
    {
        return  Member::create($input);
    }

    /**
     * @param Member $member
     * @return Member
     */
    public static function getMember(Member $member): Member
    {
        return  $member;
    }

    /**
     * @param Member $member
     * @param array $inputs
     * @return bool
     */
    public static function update(Member $member, array $inputs): bool
    {
        return $member->update($inputs);
    }

    /**
     * @param Member $member
     * @return bool
     */
    public static function delete(Member $member): bool
    {
        return $member->delete();
    }

    /**
     * @param int $pages
     * @param string $search
     * @param Carbone $maxAge
     * @return Collection
     */
    public static function getListMember(
        string $search,
        int $pages,
        int $maxAge,
        bool $isMax,
        bool $isMin,
        string $sortBy,
        bool $sortAsc
    ): LengthAwarePaginator {
        SELF::$search = $search;
        if ($maxAge == 0) {
            return Member::query()
                ->when($search, function ($query) {
                    return SELF::searchAction($query);
                })
                ->orderBy($sortBy, $sortAsc ? 'ASC' : 'DESC')
                ->with(['memberFunction'])
                ->where('church_id',Auth::user()->church->id)
                ->paginate($pages);
        } else {
            $dateForCheck = Carbon::now()->subYears(18);
            if ($isMax == true) {
                return Member::query()
                    ->when($search, function ($query) {
                        return SELF::searchAction($query);
                    })
                    ->orderBy($sortBy, $sortAsc ? 'ASC' : 'DESC')
                    ->where('birthdate', '<=', $dateForCheck)
                    ->where('church_id',Auth::user()->church->id)
                    ->with(['memberFunction'])
                    ->paginate($pages);
            } elseif ($isMin == true) {
                return Member::query()
                    ->when($search, function ($query) {
                        return SELF::searchAction($query);
                    })
                    ->orderBy($sortBy, $sortAsc ? 'ASC' : 'DESC')
                    ->where('birthdate', '>=', $dateForCheck)
                    ->where('church_id',Auth::user()->church->id)
                    ->with(['memberFunction'])
                    ->paginate($pages);
            }
        }
    }

    //Seach paramreters definition
    private static function searchAction($query): mixed
    {
        return
            $query->where(function ($query) {
                return $query->where('members.name', 'like', '%' . SELF::$search . '%')
                    ->orWhere('members.phone', 'like', '%' . SELF::$search . '%')
                    ->orWhere('members.email', 'like', '%' . SELF::$search . '%')
                    ->orWhere('members.address', 'like', '%' . SELF::$search . '%')
                    ->orWhere('members.birthdate', 'like', '%' . SELF::$search . '%')
                    ->orWhere('members.civility', 'like', '%' . SELF::$search . '%');
            });
    }
}
