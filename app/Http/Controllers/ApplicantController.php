<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\District;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function register()
    {
        $districtsList = District::orderBy('name','asc')->get();
        return view('applicant-registration',compact('districtsList'));

    }

    public function store(Request $request)
    {

        // Validate the form data
        $request->validate([
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



        $dob = Carbon::createFromFormat('d/m/Y', $request->dob)->format('Y-m-d');


        try{
            $applicantData = [
                'name' => $request->name,
                'gender' => $request->gender,
                'dob' => $dob,
                'birth_reg_no' => $request->birth_reg_no,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'district' => $request->district,
                'thana' => $request->thana,
                'present_address' => $request->present_address,
                'school_id' => $request->school_id,
                'lichess_user' => $request->lichess_user,
                'fide_id' => $request->fide_id,
            ];


            // If there is a profile image, handle file upload
            if ($request->profile_image) {
                $imagePath = $request->profile_image->store('profile_images', 'public'); // Store in 'public' disk
                $applicantData['profile_image'] = $imagePath;
            }

            $data = Applicant::create($applicantData);


            // Redirect with a success message
            return redirect()->route('application.applicantRegister')->with('success', 'Application Submitted Successfully');

        }catch (\Exception $e){
            return redirect()->route('application.applicantRegister')->with('error', $e->getMessage().$e->getLine());
        }


    }
}
