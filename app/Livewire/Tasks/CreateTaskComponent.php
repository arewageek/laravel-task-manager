<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateTaskComponent extends Component
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required|date')]
    public $date = '';

    #[Validate('required|date_format:H:i')]
    public $time = '';

    public $description = '';

    public $creator = '';

    public function save()
    {
        $creator = Auth::user()->id;
        $dateTime = $this->date.' '.$this->time;

        // $this -> validate();

        dd([
            'title' => $this->title,
            'description' => $this->description,
            'creator' => $this->creator,
        ]);

        Task::create([
            'title', 'description',
            'creator' => $creator,
            'deadline' => Carbon::parse($dateTime),
        ]);

        session()->flash('status', 'Task has been created successfully');
    }

    public function render()
    {
        return view('livewire.tasks.create-task-component', [
            'title' => $this -> title,
            'time' => $this -> time,
            'date' => $this -> date,
        ]);
    }
}
