<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class AllTasks extends Component
{
    public function render()
    {
        $tasks = Task::all();

        return view('livewire.all-tasks', ['tasks' => $tasks]);
    }
}
