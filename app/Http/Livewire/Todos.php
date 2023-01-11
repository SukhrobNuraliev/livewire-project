<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Todos extends Component
{
    public $todos;
    public $task;

    protected $rules = [
        'task' => 'required|string'
    ];

    protected $listeners = [
        'deleteTodo' => 'removeTodo',
        'checkboxClicked' => 'toggleComplete'
    ];

    /*public function mount()
    {
        $this->todos = Todo::all();
    }*/

    public function toggleComplete($id)
    {
        $todo = Todo::find($id);

        $todo->update([
            'is_complete' => !$todo->is_complete
        ]);
    }

    public function addTodo()
    {
        $this->validate();

        Todo::create([
            'task' => $this->task,
        ]);
        $this->reset('task');
        session()->flash('success', 'Category Created Successfully!!');
    }

    public function removeTodo($id)
    {
        Todo::find($id)->delete();
    }


    public function render()
    {
        $this->todos = Todo::all();
        return view('livewire.todos');
    }
}
