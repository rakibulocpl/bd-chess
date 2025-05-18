<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {
        $users = User::get();
        return view('livewire.users.user-index',compact('users'));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success','User Deleted Successfully');

    }
}
