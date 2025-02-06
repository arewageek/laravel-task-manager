<?php

namespace App\Livewire;

use Livewire\Component;

class TabCount extends Component
{
    public $count = 0;

    public $shade = 'gray';

    public $isActive = false;

    public function render()
    {
        return view('livewire.tab-count');
    }
}
