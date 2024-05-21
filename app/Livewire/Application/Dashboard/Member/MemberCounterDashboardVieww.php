<?php

namespace App\Livewire\Application\Dashboard\Member;

use App\Domain\Features\Member\MemberDashboardFeature;
use Livewire\Component;

class MemberCounterDashboardVieww extends Component
{
    public function render()
    {
        return view('livewire.application.dashboard.member.member-counter-dashboard-vieww', [
            'total_member' => MemberDashboardFeature::getTotalMember(),
            'total_major_member' => MemberDashboardFeature::getTotalMajorMember(),
            'total_minor_member' => MemberDashboardFeature::getTotalMinorMember(),
            'total_male_member' => MemberDashboardFeature::getTotalMaleMember(),
            'total_female_member' => MemberDashboardFeature::getTotalFemaleMember(),
        ]);
    }
}
