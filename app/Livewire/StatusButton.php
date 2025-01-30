<?php

namespace App\Livewire;

use Livewire\Component;

class StatusButton extends Component
{
    public $text;
    public $type;

    public $tag = [
        'complete' =>[ 'check-circle','green'],
        'trash' => ['trash','red'],
        'edit' => ['pen', 'sky']
    ];

    public function render()
    {
        return <<<'HTML'
            <button class="bg-{{$tag[$type][1]}}-200 px-4 py-2 rounded-lg text-{{$tag[$type][1]}}-900 text-sm font-bold shadow hover:bg-{{$tag[$type][1]}}-300 hover:shadow-sm transition flex items-center gap-x-2">
                {{$text}}
                <i class="bi bi-{{$tag[$type][0]}}-fill"></i>
            </button>
        HTML;
    }
}
