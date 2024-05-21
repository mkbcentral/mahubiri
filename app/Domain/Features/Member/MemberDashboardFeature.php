<?php

namespace App\Domain\Features\Member;

use App\Domain\Contract\Member\IMemberDashboard;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MemberDashboardFeature implements IMemberDashboard
{
    /**
     * @return int
     */
    public static function getTotalMember(): int
    {
        return Member::query()
            ->where('church_id',Auth::user()->church->id)
            ->count();
    }

    /**
     * @return int
     */
    public static function getTotalMajorMember(): int
    {
        $dateForCheck = Carbon::now()->subYears(18);
        return Member::query()
            ->where('birthdate', '<=', $dateForCheck)
            ->where('church_id',Auth::user()->church->id)
            ->count();
    }

    /**
     * @return int
     */
    public static function getTotalMinorMember(): int
    {
        $dateForCheck = Carbon::now()->subYears(18);
        return Member::query()
            ->where('birthdate', '>=', $dateForCheck)
            ->where('church_id',Auth::user()->church->id)
            ->count();
    }

    /**
     * @return int
     */
    public static function getTotalMaleMember(): int
    {
        return Member::query()
            ->where('church_id',Auth::user()->church->id)
            ->where('civility','M')
            ->count();
    }

    /**
     * @return int
     */
    public static function getTotalFemaleMember(): int
    {
        return Member::query()
            ->where('church_id',Auth::user()->church->id)
            ->where('civility','F')
            ->count();
    }
}
