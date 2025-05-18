<?php

namespace App\Livewire\SchoolApp;

use App\Models\Applicant;
use App\Models\District;
use App\Models\School;
use App\Models\Thana;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;


class ApplicantRegistration extends Component
{
    use WithFileUploads;

    public $name,$gender,$dob,$birth_reg_no,$mobile,$email,$district,$thana,$school_id,$present_address,$fide_id,
        $profile_image,$districtsList,$terms,$lichess_user;
    public $thanasList = [];
    public $schoolList = [];

    #[Layout('components.layouts.public')]

    public function mount()
    {
        $this->terms = true;
        $this->districtsList = collect([
            (object)['id' => '', 'name' => 'Choose District']
        ])->merge(District::orderBy('name', 'asc')->get());

        $this->thanasList = collect([
            (object)['id' => '', 'name' => 'Choose Thana/Upazila']
        ]);

        $this->schoolList = collect([
            (object)['id' => '', 'name' => 'Choose School']
        ]);

    }

    public function updatedDistrict($value)
    {
        $this->thanasList = collect([
            (object)['id' => '', 'name' => 'Choose Thana/Upazila']
        ])->merge(Thana::where('district_id', $value)->orderBy('name')->get());
        $this->thana = null;
    }

    public function updatedThana($value)
    {
        $this->schoolList = collect([
            (object)['id' => '', 'name' => 'Choose School']
        ])->merge(School::where('thana_id', $value)->orderBy('name')->get());
        $this->school_id = null;
    }




    public function render()
    {
        return view('livewire.school-app.applicant-registration');
    }
    public function register()
    {
        // Validate the form data
        $this->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:1,2,3',
            'dob' => 'required|date',
            'birth_reg_no' => 'nullable|string|max:255',
            'mobile' => ['required', 'regex:/^01[3-9][0-9]{8}$/'],
            'email' => 'nullable|email|unique:applicants,email',
            'district' => 'required|numeric',
            'thana' => 'required|numeric',
            'school_id' => 'required|numeric',
            'present_address' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|max:2048', // Image validation

            'terms' => 'required',
        ]);
        try{
            $applicantData = [
                'name' => $this->name,
                'gender' => $this->gender,
                'dob' => $this->dob,
                'birth_reg_no' => $this->birth_reg_no,
                'mobile' => $this->mobile,
                'email' => $this->email,
                'district' => $this->district,
                'thana' => $this->thana,
                'present_address' => $this->present_address,
                'school_id' => $this->school_id,
                'lichess_user' => $this->lichess_user,
                'fide_id' => $this->fide_id,
            ];


            // If there is a profile image, handle file upload
            if ($this->profile_image) {
                $imagePath = $this->profile_image->store('profile_images', 'public'); // Store in 'public' disk
                $applicantData['profile_image'] = $imagePath;
            }

            $data = Applicant::create($applicantData);


            // Redirect with a success message
            return to_route('application.applicantRegister')->with('success', 'Application Submitted Successfully');

        }catch (\Exception $e){
            return to_route('application.applicantRegister')->with('error', $e->getMessage().$e->getLine());
        }


    }
}
