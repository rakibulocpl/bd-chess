<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserCreate extends Component
{
    public $name,$email,$password,$confirm_password,$allRoles;
    public $roles = [];

    public function mount()
    {
        $this->allRoles = Role::all();

    }

    public function render()
    {
        return view('livewire.users.user-create');
    }

    public function submit()
    {

        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:roles,email',
            'password'=>'required|same:confirm_password'
        ]);

        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>Hash::make($this->password)
        ]);
        $user->syncRoles($this->roles);

        return to_route('users.index')->with('success','User Created');

    }
}
