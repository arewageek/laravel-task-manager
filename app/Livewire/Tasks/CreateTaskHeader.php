<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class CreateTaskHeader extends Component
{
    public $title = '';

    public $date = '';

    public $time = '';

    public function mount($title, $date, $time) {
        $this -> title = $title;
        $this -> date = $date;
        $this -> time = $time;
    }

    public function render()
    {
        return view('livewire.tasks.create-task-header', [
            'title' => $this -> title,
            'date' => $this -> date,
            'time' => $this -> time
        ]);
    }
}
