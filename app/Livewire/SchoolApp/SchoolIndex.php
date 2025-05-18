<?php

namespace App\Livewire\SchoolApp;

use App\Models\School;
use App\Models\User;
use Livewire\Component;

class SchoolIndex extends Component
{
    public function render()
    {
        $schools = School::orderBy('id','desc')->paginate(10);
        return view('livewire.school-app.school-index',compact('schools'));
    }
}
