<?php

namespace App\Livewire;

use Livewire\Component;

class CheckButton extends Component
{
    public $isChecked = false;

    public function toggleState()
    {
        $this->isChecked = ! $this->isChecked;
    }

    public function render()
    {
        return view('livewire.check-button');
    }
}
