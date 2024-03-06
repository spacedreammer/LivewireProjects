<?php

namespace App\Livewire;

use App\Models\TodoItem;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public string $todoText = '';
    public bool $disabled = false;


    public function mount()
    {
        $this->selectTodos();
    }
    public function render()
    {

        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        $todo = new TodoItem();
        $todo->todo = $this->todoText;
        $todo->completed = false;

        $todo->save();

        $this->todoText = '';
        $this->selectTodos();
    }

    public function toggleTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();

        if (!$todo) {
            return;
        } else {
            $todo->completed = !$todo->completed;

            $todo->save();
            $this->selectTodos();
        }
    }


    public function selectTodos()
    {
        $this->todos = TodoItem::orderBy('created_at', 'DESC')->get();
    }

    public function deleteTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();

        if (!$todo) {
            return;
        } else {
            $todo->delete();

            $this->selectTodos();
        }
    }

    // public function render()
    // {
    //     return view('livewire.todo-list');
    // }
}
