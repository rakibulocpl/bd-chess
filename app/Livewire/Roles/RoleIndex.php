<?php

namespace App\Livewire\Roles;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleIndex extends Component
{
    public function render()
    {
        $roles = Role::get();
        return view('livewire.roles.role-index',compact('roles'));
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        Session::flash('success','Role Deleted');
    }
}
