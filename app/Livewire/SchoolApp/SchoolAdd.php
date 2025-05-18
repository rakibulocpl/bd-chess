<?php

namespace App\Livewire\SchoolApp;

use App\Models\District;
use App\Models\School;
use App\Models\Thana;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SchoolAdd extends Component
{
    public  $district,$thana,$name,$einn;

    public $thanasList = [];
    public $districtsList = [];

    #[Layout('components.layouts.public')]
    public function mount()
    {

        $this->districtsList = collect([
            (object)['id' => '', 'name' => 'Choose District']
        ])->merge(District::orderBy('name', 'asc')->get());

        $this->thanasList = collect([
            (object)['id' => '', 'name' => 'Choose Thana/Upazila']
        ]);

    }

    public function updatedDistrict($value)
    {
        $this->thanasList = collect([
            (object)['id' => '', 'name' => 'Choose Thana/Upazila']
        ])->merge(Thana::where('district_id', $value)->orderBy('name')->get());
        $this->thana = null;
    }
    public function render()
    {
        return view('livewire.school-app.school-add');
    }

    public function submit()
    {

        $this->validate([
            'name'=>'required',
            'district'=>'required',
            'thana'=>'required'
        ]);

        School::create([
            'name'=>$this->name,
            'district_id'=>$this->district,
            'thana_id'=>$this->thana,
            'einn'=>$this->einn
        ]);

        return to_route('home')->with('success','School Created');

    }
}
