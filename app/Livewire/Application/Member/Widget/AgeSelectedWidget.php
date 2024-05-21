<?php

namespace App\Livewire\Application\Member\Widget;

use Livewire\Component;

class AgeSelectedWidget extends Component
{
    protected $listeners = [
        'initMax' => 'initMaxAge',
        'isMax' => 'makeIsMax',
        'isMin' => 'makeIsMin',
    ];
    public bool $isMax = false, $isMin = false;
    public int $maxAge = 0;

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
    public function render()
    {
        return view('livewire.application.member.widget.age-selected-widget');
    }
}
