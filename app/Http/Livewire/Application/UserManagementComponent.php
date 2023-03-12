<?php

namespace App\Http\Livewire\Application;

use App\Models\Application\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;


class UserManagementComponent extends Component
{

    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';


    public function resetUserPassword($id)
    {

        $user = User::find($id);

        $user->update(["password" => Hash::make('123456')]);

        $this->alert('success', 'User Password Reset Process Done');

    }

    public function toggleStatus($id)
    {

        $user = User::find($id);

        $user->update(["is_blocked" => !$user->is_blocked]);

        $this->alert('success', 'User Active Session updated');


    }
    public function render()
    {
        return view('livewire.application.user-management-component', [
            'users' => User::where('is_admin', '!=', 1)->paginate(6)
        ]);
    }
}
