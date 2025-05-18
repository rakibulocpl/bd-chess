<?php

namespace App\Livewire\SchoolApp;

use Livewire\Attributes\Layout;
use Livewire\Component;

class SchoolNotice extends Component
{
    #[Layout('components.layouts.public')]

    public function render()
    {
        return view('livewire.school-app.school-notice');
    }
}
