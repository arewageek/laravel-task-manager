<?php

namespace App\Livewire;

use Livewire\Component;

class BackButton extends Component
{
    public function render()
    {
        return <<<'HTML'
            <button onClick="javascript:window.history.back()" class="text-sm text-sky-800 font-bold flex items-center gap-x-2">
                <i class="bi bi-arrow-return-left"></i>
                Go Back
            </button>
        HTML;
    }
}
