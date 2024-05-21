<?php

namespace App\Domain\Contract\Member;

use App\Models\Member;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface IMember
{
    public static function create(array $input): Member;
    public static function getMember(Member $member): Member;
    public static function update(Member $member, array $inputs): bool;
    public  static function delete(Member $member): bool;
    public static function getListMember(
        string $search,
        int $apges,
        int $maxAge,
        bool $isMax,
        bool $isMin,
        string $sortBy,
        bool $sortAsc,
    ): LengthAwarePaginator;
}
