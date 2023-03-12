<?php

namespace App\Http\Livewire\Application\Todo;

use App\Models\Application\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class TodoListComponent extends Component
{
    use WithPagination;
    protected $appId;
    protected $userId;

    public function mount($appId, $userId)
    {

        $this->appId = $appId;
        $this->userId = $userId;
    }
    public function render()
    {
        return view('livewire.application.todo.todo-list-component', [
            "todos" => Todo::where([
                'app_id' => $this->appId,
                'user_id' => $this->userId,
            ])->paginate(6)
        ]);
    }
}
