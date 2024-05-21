<?php

namespace App\Livewire\Application\Member;

use App\Domain\Features\Member\MemberFeature;
use App\Models\Member;
use Exception;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class MemberView extends Component
{
    use WithPagination;
    #[Url(as: 'q')]
    public $q = '';
    #[Url(as: 'sortBy')]
    public $sortBy = 'name';
    #[Url(as: 'sortAsc')]
    public $sortAsc = true;
    public bool $isMax = false, $isMin = false;
    public int $maxAge = 0;
    public int $perPage = 10;


    public function initMaxAge()
    {
        $this->maxAge = 0;
        $this->isMax = false;
        $this->isMin = false;
    }

    public function makeIsMax()
    {
        $this->maxAge = 18;
        $this->isMin = false;
        $this->isMax = true;
    }

    public function makeIsMin()
    {
        $this->maxAge = 18;
        $this->isMax = false;
        $this->isMin = true;
    }

    public function sortMember($value): void
    {
        if ($value == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $value;
    }

    public function delete(Member $member)
    {
        try {
            MemberFeature::delete($member);
        } catch (Exception $ex) {
            $this->dispatch('error', ['message' => $ex->getMessage()]);
        }
    }

    public function render()
    {
        return view('livewire.application.member.member-view', [
            'members' => MemberFeature::getListMember(
                $this->q,
                $this->perPage,
                $this->maxAge,
                $this->isMax,
                $this->isMin,
                $this->sortBy,
                $this->sortAsc
            )
        ]);
    }
}
