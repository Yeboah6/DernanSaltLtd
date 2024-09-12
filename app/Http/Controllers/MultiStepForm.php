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
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }

        $applicant_id = ApplicantLogins::all();
        $applicantData = PersonalInfo::all();

        // foreach ($applicant_id as $id) {
        //     foreach ($applicantData as $pdata) {
        //          $pdata = PersonalInfo::where('user_id', $id -> id) -> get();
        //     }
        // }

        return view('form.personal-info', compact('data', 'applicantData')); 
    }

    // Store Personal Info Data Function
    public function postPersonalInfo(Request $request) {
        
        $character = 'ID';
        $pin = mt_rand(10, 99) . mt_rand(10, 99);
        $applicant_id = $character. '' .$pin;

        $personalInfo = new PersonalInfo();

        $personalInfo -> user_id = $request -> input('user_id');
        $personalInfo -> applicant_id = $applicant_id;
        $personalInfo -> first_name = $request -> input('first_name');
        $personalInfo -> middle_name = $request ->input('middle_name') ;
        $personalInfo -> last_name = $request -> input('last_name');
        $personalInfo -> dob = $request -> input('dob');
        $personalInfo -> gender = $request -> input('gender');
        $personalInfo -> nationality = $request -> input('nationality');
        $personalInfo -> address = $request -> input('address');
        $personalInfo -> number = $request -> input('number');
        $personalInfo -> email = $request -> input('email');

        $saveSuccess = $personalInfo -> save();

        if ($saveSuccess) {
            session(['personal_info_id' => $personalInfo->id]);
            return redirect('/work-experience') -> with('success', 'Data Saved Successfully');
        } else {
            return redirect() -> back() -> with('fail', 'Data not Saved');
        }
    }

     // Display Work Experience Page Function
    public function workExperience() {
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }

        $personal_info_id = session('personal_info_id');

        $personal_id = PersonalInfo::where('id', $personal_info_id)->get();

        return view('form.work-experience', compact('data', 'personal_id'));
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

        $experience -> position_id = $request -> input('position_id');

        $experience -> save();
        return redirect('/education') -> with('success', 'Data Saved Successfully');
    }

    // Display Education Page Function
    public function education() {
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }

        $personal_info_id = session('personal_info_id');
        $personal_id = PersonalInfo::where('id', $personal_info_id)->get();

        return view('form.education', compact('data', 'personal_id'));
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

        $personal_info_id = session('personal_info_id');
        $personal_id = PersonalInfo::where('id', $personal_info_id)->get();

        return view('form.referee', compact('data', 'personal_id'));
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

        $personal_info_id = session('personal_info_id');
        $personal_id = PersonalInfo::where('id', $personal_info_id)->get();

        return view('form.other-relevant', compact('data', 'personal_id'));
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

        $personal_info_id = session('personal_info_id');
        $personal_id = PersonalInfo::where('id', $personal_info_id)->get();

        return view('form.uploads', compact('data', 'personal_id'));
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

        $personal_info_id = session('personal_info_id');
        $personal_id = PersonalInfo::where('id', $personal_info_id)->get();

        return view('form.agreement', compact('data', 'personal_id'));
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

}
