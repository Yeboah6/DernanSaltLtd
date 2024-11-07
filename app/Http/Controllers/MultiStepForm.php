<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\ApplicantLogins;
use App\Models\Education;
use App\Models\Files;
use App\Models\JobDetails;
use App\Models\PersonalInfo;
use App\Models\RefereeInfo;
use App\Models\Skills;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use League\CommonMark\Reference\Reference;

class MultiStepForm extends Controller
{
    // Display Personal Info Page Function
    public function personalInfo() {
        // Initialize $data as null
        $data = null;
    
        // Check if the user is logged in via session
        if(Session::has('loginId')) {
            // Fetch the user's login data
            $data = ApplicantLogins::find(Session::get('loginId'));
        }
    
        // Ensure the user is logged in
        if ($data) {
            // Retrieve the user's personal information
            $personal_info = PersonalInfo::where('user_id', $data -> id) -> first();
    
            // Check if personal info exists for the user
            if (!$personal_info) {
                // No personal info found, render personal info form view
                return view('form.personal-info', compact('data'));
            } else {
                // Personal info found, render update form view
                return view('form.update-personal-info', compact('data', 'personal_info'));
            }
        }
    
        // Handle the case where the session is missing or invalid
        return redirect()->route('login')->with('error', 'Please log in to access this page.');
    }
    

    // Store Personal Info Data Function

    public function postPersonalInfo(Request $request) {

        // Validate the form data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:applicant_logins,id',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'nationality' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'email' => 'required|email|max:255'
        ]);
    
        // Generate applicant ID
        $applicant_id = 'ID' . mt_rand(1000, 9999);
    
        // Create a new PersonalInfo instance
        $personalInfo = new PersonalInfo();
    
        // Fill data into the model
        $personalInfo->fill([
            'user_id' => $validatedData['user_id'],
            'applicant_id' => $applicant_id,
            'first_name' => $validatedData['first_name'],
            'middle_name' => $validatedData['middle_name'] ?? null, // Middle name can be nullable
            'last_name' => $validatedData['last_name'],
            'dob' => $validatedData['dob'],
            'gender' => $validatedData['gender'],
            'nationality' => $validatedData['nationality'],
            'address' => $validatedData['address'],
            'number' => $validatedData['number'],
            'email' => $validatedData['email'],
        ]);
    
        // Save the personal information
        if ($personalInfo->save()) {
            // Store the personal_info_id in the session if save is successful
            session(['personal_info_id' => $personalInfo->id]);
    
            // Redirect to work experience page with success message
            return redirect('/work-experience')->with('success', 'Data saved successfully');
        } else {
            // Redirect back with failure message
            return redirect()->back()->with('fail', 'Data not saved');
        }
    }
    

    // public function postPersonalInfo(Request $request) {

    //     $character = 'ID';
    //     $pin = mt_rand(10, 99) . mt_rand(10, 99);
    //     $applicant_id = $character. '' .$pin;

    //     $personalInfo = new PersonalInfo();

    //     $personalInfo -> user_id = $request -> input('user_id');
    //     $personalInfo -> applicant_id = $applicant_id;
    //     $personalInfo -> first_name = $request -> input('first_name');
    //     $personalInfo -> middle_name = $request ->input('middle_name') ;
    //     $personalInfo -> last_name = $request -> input('last_name');
    //     $personalInfo -> dob = $request -> input('dob');
    //     $personalInfo -> gender = $request -> input('gender');
    //     $personalInfo -> nationality = $request -> input('nationality');
    //     $personalInfo -> address = $request -> input('address');
    //     $personalInfo -> number = $request -> input('number');
    //     $personalInfo -> email = $request -> input('email');

    //     $saveSuccess = $personalInfo -> save();

    //     if ($saveSuccess) {
    //        session(['personal_info_id' => $personalInfo -> id]);
    //         return redirect('/work-experience') -> with('success', 'Data Saved Successfully');
    //     } else {
    //         return redirect() -> back() -> with('fail', 'Data not Saved');
    //     }
    // }

    // Display Work Experience Page Function
    public function workExperience() {
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }

        $personal_id = session('personal_info_id');

        $workExperience = WorkExperience::all();
        $personal_info = PersonalInfo::all();

        // dd($personal_id);

        if ($workExperience -> isEmpty()) {
            return view('form.work-experience', compact('data', 'personal_id'));
        } else {
            foreach ($personal_info as $id) {
                if ($data -> id == $id -> user_id) {
                    foreach ($workExperience as $expe) {
                        if ($expe -> personal_id == $id -> id) {
                            return view('form.update-work-experience', compact('data', 'personal_id', 'expe'));
                        }
                    }
                }
            }
        }
    }

    // Store Work Experience Data Function
    public function postWorkExperience(Request $request) {
        $experience = new WorkExperience();

        $experience -> personal_id = $request -> input('personal_id');

        $experience -> current_employer = $request -> input('current_employer');
        $experience -> company_name = $request -> input('company_name');
        $experience -> company_address = $request -> input('company_address');
        $experience -> position_held = $request -> input('position_held');
        $experience -> duration_of_employment_from = $request -> input('duration_of_employment_from');
        $experience -> duration_of_employment_to = $request -> input('duration_of_employment_to');
        $experience -> responsilibities = $request -> input('responsilibities');

        $experience -> current_employer2 = $request -> input('current_employer2');
        $experience -> company_name2 = $request -> input('company_name2');
        $experience -> company_address2 = $request -> input('company_address2');
        $experience -> position_held2 = $request -> input('position_held2');
        $experience -> duration_of_employment_from2 = $request -> input('duration_of_employment_from2');
        $experience -> duration_of_employment_to2 = $request -> input('duration_of_employment_to2');
        $experience -> responsilibities2 = $request -> input('responsilibities2');

        $experience -> position = $request -> input('position');

        $experience -> save();
        return redirect('/education') -> with('success', 'Data Saved Successfully');
    }

    // Display Education Page Function
    public function education() {
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }

        $personal_id = session('personal_info_id');

        $education = Education::all();
        $personal_info = PersonalInfo::all();

        if ($education -> isEmpty()) {
            return view('form.education', compact('data', 'personal_id'));
        } else {
            foreach ($personal_info as $id) {
                if ($data -> id == $id -> user_id) {
                    foreach ($education as $edu) {
                        if ($edu -> personal_id == $id -> id) {
                            return view('form.update-education', compact('data', 'personal_id', 'edu'));
                        }
                    }
                }
            }
        }
        
    }

    // Store Education Data Function
    public function postEducation(Request $request) {
        $education = new Education();

        $education -> personal_id = $request -> input('personal_id');

        $education -> institution_name = $request -> input('institution_name');
        $education -> certificate = $request -> input('certificate');
        $education -> year_began = $request -> input('year_began');
        $education -> year_of_graduation = $request -> input('year_of_graduation');

        $education -> institution_name2 = $request -> input('institution_name2');
        $education -> certificate2 = $request -> input('certificate2');
        $education -> year_began2 = $request -> input('year_began2');
        $education -> year_of_graduation2 = $request -> input('year_of_graduation2');

        $education -> institution_name3 = $request -> input('institution_name3');
        $education -> certificate3 = $request -> input('certificate3');
        $education -> year_began3 = $request -> input('year_began3');
        $education -> year_of_graduation3 = $request -> input('year_of_graduation3');

        $education -> school_name = $request -> input('school_name');
        $education -> secondary_certificate = $request -> input('secondary_certificate');
        $education -> year_of_completion = $request -> input('year_of_completion');

        $education -> save();
        return redirect('/referee') -> with('success', 'Data Saved Successfully');
    }

    // Display Referee Page Function
    public function referee() {
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }

        $info = ApplicantLogins::all();

        foreach ($info as $info) {
            $details = PersonalInfo::where('user_id', $info -> id ) -> get();
        }

        $personal_id = session('personal_info_id');

        $referee = RefereeInfo::all();
        $personal_info = PersonalInfo::all();

        if ($referee -> isEmpty()) {
            return view('form.referee', compact('data', 'personal_id'));
        } else {
            foreach ($personal_info as $id) {
                if ($data -> id == $id -> user_id) {
                    foreach ($referee as $ref) {
                        if ($ref -> personal_id == $id -> id) {
                            return view('form.update-referee', compact('data', 'personal_id', 'ref'));
                        }
                    }
                }
            }
        }
 
    }

    // Store Referee Data Function
    public function postReferee(Request $request) {
        $referee = new RefereeInfo();

        $referee -> personal_id = $request -> input('personal_id');

        $referee -> referee_name = $request -> input('referee_name');
        $referee -> referee_position = $request -> input('referee_position');
        $referee -> referee_company = $request -> input('referee_company');
        $referee -> referee_number = $request -> input('referee_number');
        $referee -> referee_email = $request -> input('referee_email');

        $referee -> referee_name2 = $request -> input('referee_name2');
        $referee -> referee_position2 = $request -> input('referee_position2');
        $referee -> referee_company2 = $request -> input('referee_company2');
        $referee -> referee_number2 = $request -> input('referee_number2');
        $referee -> referee_email2 = $request -> input('referee_email2');

        $referee -> save();
        return redirect('/other-relevant') -> with('success', 'Data Saved Successfully');
    }

    // Display Other Relevant Page Function
    public function otherRelevant() {
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }

        $personal_id = session('personal_info_id');

        $otherRelevant = Skills::all();
        $personal_info = PersonalInfo::all();

        if ($otherRelevant -> isEmpty()) {
            return view('form.other-relevant', compact('data', 'personal_id'));
        } else {
            foreach ($personal_info as $id) {
                if ($data -> id == $id -> user_id) {
                    foreach ($otherRelevant as $other) {
                        if ($other -> personal_id == $id -> id) {
                            return view('form.update-other-relevant', compact('data', 'personal_id', 'other'));
                        }
                    }
                }
            }
        }
        
    }

    // Store Other Relevant Data Function
    public function postOtherRelevant(Request $request) {
        $otherRelevant = new Skills();

        $otherRelevant -> personal_id = $request -> input('personal_id');

        $otherRelevant -> skills_certificate = $request -> input('skills_certificate');
        $otherRelevant -> reason = $request -> input('reason');
        $otherRelevant -> availability = $request -> input('availability');

        $otherRelevant -> save();
        return redirect('/upload-docs') -> with('success', 'Data Saved Successfully');
    }

    // Display Uploads Page Function
    public function uploads() {
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }

        $personal_id = session('personal_info_id');

        $uploadDoc = Files::all();
        $personal_info = PersonalInfo::all();

        if ($uploadDoc -> isEmpty()) {
            return view('form.uploads', compact('data', 'personal_id'));
        } else {
            foreach ($personal_info as $id) {
                if ($data -> id == $id -> user_id) {
                    foreach ($uploadDoc as $doc) {
                        if ($doc -> personal_id == $id -> id) {
                            return view('form.update-uploads', compact('data', 'personal_id', 'doc'));
                        }
                    }
                }
            }
        }

    }

    // Store Uploads Data Function
    public function postUploads(Request $request) {
        $uploadDoc = new Files();

        $uploadDoc -> personal_id = $request -> input('personal_id');

        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,svg|max:5048',
            'cv' => 'mimes:doc,pdf,docx,zip|max:5048',
            'cerificates_acquired' => 'mimes:doc,pdf,docx,zip|max:5048',
            'cover_letter' => 'mimes:doc,pdf,docx,zip|max:5048',
            'other_relevant_doc' => 'mimes:doc,pdf,docx,zip|max:5048',
        ]);

        if($file = $request->hasFile('image')) {
         
            $file = $request->file('image');
            $fileName = 'IM_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/applicant-images/';
            $file->move($destinationPath,$fileName);
            $uploadDoc -> image = $fileName;
        }

        if($file = $request->hasFile('cv')) {
                 
            $file = $request->file('cv');
            $fileName = 'CV_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/applicant-documents/';
            $file->move($destinationPath,$fileName);
            $uploadDoc -> cv = $fileName;
        }

        if($file = $request->hasFile('cerificates_acquired')) {
                 
            $file = $request->file('cerificates_acquired');
            $fileName = 'CA_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/applicant-documents/';
            $file->move($destinationPath,$fileName);
            $uploadDoc -> cerificates_acquired = $fileName;
        }

        if($file = $request->hasFile('cover_letter')) {
                 
            $file = $request->file('cover_letter');
            $fileName = 'CL_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/applicant-documents/';
            $file->move($destinationPath,$fileName);
            $uploadDoc -> cover_letter = $fileName;
        }

        if($file = $request->hasFile('other_relevant_doc')) {
                 
            $file = $request->file('other_relevant_doc');
            $fileName = 'ORL_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/applicant-documents/';
            $file->move($destinationPath,$fileName);
            $uploadDoc -> other_relevant_doc = $fileName;
        }

        $uploadDoc -> save();
        return redirect('/agreement') -> with('success', 'Data Saved Successfully');
    }

    // Display Agreement Page Function
    public function agreement() {
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }

        $personal_id = session('personal_info_id');

        $agreement = Agreement::all();
        $personal_info = PersonalInfo::all();

        if ($agreement -> isEmpty()) {
            return view('form.agreement', compact('data', 'personal_id'));
        } else {
            foreach ($personal_info as $id) {
                if ($data -> id == $id -> user_id) {
                    foreach ($agreement as $agree) {
                        if ($agree -> personal_id == $id -> id) {
                            return view('form.update-agreement', compact('data', 'personal_id', 'agree'));
                        }
                    }
                }
            }
        }

    }

    // Store Agreement Data Function
    public function postAgreement(Request $request) {
        $agreement = new Agreement();

        $agreement -> personal_id = $request -> input('personal_id');

        $agreement -> agreement = $request -> input('agreement');
        $agreement -> signature = $request -> input('signature');
        $agreement -> date = $request -> input('date');
        $agreement -> status = "Submitted";

        $agreement -> save();
        return redirect('/personal-info') -> with('success', 'Application Submitted Successfully');
    }

    // Update Personal Info Function
    public function updatePersonalInfo(Request $request) {
        $personal_id = $request -> input('user_id');

        $personal_info = PersonalInfo::where('user_id', $personal_id) -> first();

        if ($personal_info) {
        $personal_info -> first_name = $request -> input('first_name');
        $personal_info -> middle_name = $request ->input('middle_name') ;
        $personal_info -> last_name = $request -> input('last_name');
        $personal_info -> dob = $request -> input('dob');
        $personal_info -> gender = $request -> input('gender');
        $personal_info -> nationality = $request -> input('nationality');
        $personal_info -> address = $request -> input('address');
        $personal_info -> number = $request -> input('number');
        $personal_info -> email = $request -> input('email');

        $personal_info -> update();
        return redirect('/personal-info') -> with('success', 'Data Updated Successfully');
        } else {
            return redirect('/personal-info')->with('fail', 'Record Not Found');
        }
    }

    // Update Work Experience Function
    public function updateworkExperience(Request $request) {
        $workExperience_id = $request -> input('personal_id');

        $workExperience_info = WorkExperience::where('personal_id', $workExperience_id) -> first();

        if ($workExperience_info) {
            $workExperience_info -> current_employer = $request -> input('current_employer');
            $workExperience_info -> company_name = $request -> input('company_name');
            $workExperience_info -> company_address = $request -> input('company_address');
            $workExperience_info -> position_held = $request -> input('position_held');
            $workExperience_info -> duration_of_employment_from = $request -> input('duration_of_employment_from');
            $workExperience_info -> duration_of_employment_to = $request -> input('duration_of_employment_to');
            $workExperience_info -> responsilibities = $request -> input('responsilibities');

            $workExperience_info -> current_employer2 = $request -> input('current_employer2');
            $workExperience_info -> company_name2 = $request -> input('company_name2');
            $workExperience_info -> company_address2 = $request -> input('company_address2');
            $workExperience_info -> position_held2 = $request -> input('position_held2');
            $workExperience_info -> duration_of_employment_from2 = $request -> input('duration_of_employment_from2');
            $workExperience_info -> duration_of_employment_to2 = $request -> input('duration_of_employment_to2');
            $workExperience_info -> responsilibities2 = $request -> input('responsilibities2');

            $workExperience_info -> update();
            return redirect('/work-experience') -> with('success', 'Data Updated Successfully');
        } else {
            return redirect('/work-experience') -> with('fail', 'Record Not Found');
        }
    }

    public function updateEducation(Request $request) {
        $education_id = $request -> input('personal_id');

        $education_info = Education::where('personal_id', $education_id) -> first();

        if ($education_info) {
            $education_info -> institution_name = $request -> input('institution_name');
            $education_info -> certificate = $request -> input('certificate');
            $education_info -> year_began = $request -> input('year_began');
            $education_info -> year_of_graduation = $request -> input('year_of_graduation');

            $education_info -> institution_name2 = $request -> input('institution_name2');
            $education_info -> certificate2 = $request -> input('certificate2');
            $education_info -> year_began2 = $request -> input('year_began2');
            $education_info -> year_of_graduation2 = $request -> input('year_of_graduation2');

            $education_info -> institution_name3 = $request -> input('institution_name3');
            $education_info -> certificate3 = $request -> input('certificate3');
            $education_info -> year_began3 = $request -> input('year_began3');
            $education_info -> year_of_graduation3 = $request -> input('year_of_graduation3');

            $education_info -> school_name = $request -> input('school_name');
            $education_info -> secondary_certificate = $request -> input('secondary_certificate');
            $education_info -> year_of_completion = $request -> input('year_of_completion');

            $education_info -> update();
            return redirect('/education') -> with('success', 'Data Updated Successfully');
        } else {
            return redirect('/education') -> with('fail', 'Record Not Found');
        }
    }


    public function updateReferee(Request $request) {
        $referee_id = $request -> input('personal_id');

        $referee_info = RefereeInfo::where('personal_id', $referee_id) -> first();

        if ($referee_info) {
            $referee_info -> referee_name = $request -> input('referee_name');
            $referee_info -> referee_position = $request -> input('referee_position');
            $referee_info -> referee_company = $request -> input('referee_company');
            $referee_info -> referee_number = $request -> input('referee_number');
            $referee_info -> referee_email = $request -> input('referee_email');

            $referee_info -> referee_name2 = $request -> input('referee_name2');
            $referee_info -> referee_position2 = $request -> input('referee_position2');
            $referee_info -> referee_company2 = $request -> input('referee_company2');
            $referee_info -> referee_number2 = $request -> input('referee_number2');
            $referee_info -> referee_email2 = $request -> input('referee_email2');

            $referee_info -> update();
            return redirect('/referee') -> with('success', 'Data Updated Successfully');
        } else {
            return redirect('/referee') -> with('fail', 'Record Not Found');
        }
    }


    public function updateOtherRelevant(Request $request) {
        $otherRelevant_id = $request -> input('personal_id');

        $otherRelevant_info = Skills::where('personal_id', $otherRelevant_id) -> first();

        if ($otherRelevant_info) {
            $otherRelevant_info -> skills_certificate = $request -> input('skills_certificate');
            $otherRelevant_info -> reason = $request -> input('reason');
            $otherRelevant_info -> availability = $request -> input('availability');

            $otherRelevant_info -> update();
            return redirect('/other-relevant') -> with('success', 'Data Updated Successfully');
        } else {
            return redirect('/other-relevant') -> with('fail', 'Record Not Found');
        }
    }

    public function updateUploads(Request $request) {
        $docs_id = $request -> input('personal_id');

        $docs_info = Files::where('personal_id', $docs_id) -> first();

        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,svg|max:5048',
            'cv' => 'mimes:doc,pdf,docx,zip|max:5048',
            'cerificates_acquired' => 'mimes:doc,pdf,docx,zip|max:5048',
            'cover_letter' => 'mimes:doc,pdf,docx,zip|max:5048',
            'other_relevant_doc' => 'mimes:doc,pdf,docx,zip|max:5048',
        ]);

        if ($docs_info) {
            if($file = $request->hasFile('image')) {
         
                $file = $request->file('image');
                $fileName = 'IM_'.$file->getClientOriginalName();
                $destinationPath = public_path().'/uploads/applicant-images/';
                $file->move($destinationPath,$fileName);
                $docs_info -> image = $fileName;
            }
    
            if($file = $request->hasFile('cv')) {
                     
                $file = $request->file('cv');
                $fileName = 'CV_'.$file->getClientOriginalName();
                $destinationPath = public_path().'/uploads/applicant-documents/';
                $file->move($destinationPath,$fileName);
                $docs_info -> cv = $fileName;
            }
    
            if($file = $request->hasFile('cerificates_acquired')) {
                     
                $file = $request->file('cerificates_acquired');
                $fileName = 'CA_'.$file->getClientOriginalName();
                $destinationPath = public_path().'/uploads/applicant-documents/';
                $file->move($destinationPath,$fileName);
                $docs_info -> cerificates_acquired = $fileName;
            }
    
            if($file = $request->hasFile('cover_letter')) {
                     
                $file = $request->file('cover_letter');
                $fileName = 'CL_'.$file->getClientOriginalName();
                $destinationPath = public_path().'/uploads/applicant-documents/';
                $file->move($destinationPath,$fileName);
                $docs_info -> cover_letter = $fileName;
            }
    
            if($file = $request->hasFile('other_relevant_doc')) {
                     
                $file = $request->file('other_relevant_doc');
                $fileName = 'ORL_'.$file->getClientOriginalName();
                $destinationPath = public_path().'/uploads/applicant-documents/';
                $file->move($destinationPath,$fileName);
                $docs_info -> other_relevant_doc = $fileName;
            }

            $docs_info -> update();
            return redirect('/upload-docs') -> with('success', 'Data Updated Successfully');
        } else {
            return redirect('/upload-docs') -> with('fail', 'Record Not Found');
        }
    }

    public function updateAgreement(Request $request) {
        $agreement_id = $request -> input('personal_id');

        $agreement_info = Agreement::where('personal_id', $agreement_id) -> first();

        if ($agreement_info) {
            $agreement_info -> agreement = $request -> input('agreement');
            $agreement_info -> signature = $request -> input('signature');

            $agreement_info -> update();
            return redirect('/personal-info') -> with('success', 'Data Updated Successfully');
        } else {
            return redirect('/agreement') -> with('fail', 'Record Not Found');
        }
    }

}
