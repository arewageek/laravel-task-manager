<?php

namespace App\Livewire;

use Livewire\Component;

class TaskHeader extends Component
{
    public $task_title = "Design portfolio";
    public $task_deadline = "date";
    public $task_project = "Design";

    public function render()
    {
        return view('livewire.task-header');
    }
}
