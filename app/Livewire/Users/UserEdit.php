<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{

    public $user,$name,$email,$password,$confirm_password,$allRoles;
    public $roles= [];

    public function mount($id)
    {
        $this->allRoles = Role::all();
        $this->user = User::findOrFail($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->roles = $this->user->roles->pluck('name');

    }
    public function render()
    {
        return view('livewire.users.user-edit');
    }

    public function submit()
    {


        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.$this->user->id,
            'password'=>'same:confirm_password'
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        if ($this->password){
            $this->user->password = Hash::make($this->password);
        }
        $this->user->save();
        $this->user->syncRoles($this->roles);


        return to_route('users.index')->with('success','User information updated');

    }
}
