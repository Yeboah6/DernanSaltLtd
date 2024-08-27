<?php

namespace App\Http\Controllers;

use App\Models\JobDetails;
use Illuminate\Http\Request;

class MultiStepForm extends Controller
{
    public function createStepOne(Request $request) {
        $applicant = $request -> session() -> get('applicant');
        return view('multiStepForm.step-one-job-form', compact('applicant'));
    }

    public function postCreateStepOne(Request $request) {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
                'middle_name' => 'required|string',
                'last_name' => 'required|string',
                'dob' => 'required',
                'gender' => 'required',
                'nationality' => 'required|string',
                'address' => 'required|string',
                'number' => 'required|digits:10',
                'email' => 'required|email'
        ]);

        if (empty($request -> session() -> get('applicant'))) {
            $applicant = new JobDetails();

            $applicant -> fill($validatedData);
            $request -> session() -> put('applicant', $applicant);
        } else {
            $applicant = $request -> session() -> get('applicant');
            $applicant -> fill($validatedData);
            $request -> session() -> put('applicant', $applicant);
        }

        return redirect() -> route('apply.create.step.two');
    }

    public function createStepTwo(Request $request) {
        $applicant = $request -> session() -> get('applicant');

        return view('multiStepForm.step-two-job-form', compact('applicant'));
    }

    public function postCreateStepTwo(Request $request) {
        $validatedData = $request -> validate([
            'current_employer' => 'required|string',
            'company_name' => 'required',
            'company_address' => 'required',
            'position_held' => 'required|string',
            'duration_of_employment_from' => 'required',
            'duration_of_employment_to' => 'required', 
            'responsilibities' => 'required|string|min:10|max:500',

            'current_employer2' => 'required|string',
            'company_name2' => 'required',
            'company_address2' => 'required',
            'position_held2' => 'required|string',
            'duration_of_employment_from2' => 'required',
            'duration_of_employment_to2' => 'required',
            'responsilibities2' => 'required|string|min:10|max:500',
            // 'position' => 'string',
        ]);

        $applicant = $request -> session() -> get('applicant');
        $applicant -> fill($validatedData);
        $applicant -> session() -> put('applicant', $applicant);
  
        return redirect()-> route('apply.create.step.three');
    }

    public function createStepThree(Request $request) {
        $applicant = $request -> session() -> get('applicant');
  
        return view('multiStepForm.step-three-job-form', compact('applicant'));
    }

    public function postCreateStepThree(Request $request) {
        $validatedData = $request -> validate([
            'institution_name' => 'required',
            'certificate' => 'required',
            'year_began' => 'required',
            'year_of_graduation' => 'required',

            'institution_name2' => 'required',
            'certificate2' => 'required',
            'year_began2' => 'required',
            'year_of_graduation2' => 'required',

            'school_name' => 'required',
            'secondary_certificate' => 'required',
            'year_of_completion' => 'required'
        ]);

        $applicant = $request->session()->get('applicant');
        $applicant->fill($validatedData);
        $applicant->session()->put('applicant', $applicant);
  
        return redirect()->route('apply.create.step.four');
    } 
}
