<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\JobDetails;
use App\Models\PostJobs;

class JobApplication extends Component
{

    use WithFileUploads;
    // public $applicant_id;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $dob;
    public $gender;
    public $nationality;
    public $address;
    public $number;
    public $email;

    public $current_employer;
    public $company_name;
    public $company_address;
    public $position_held;
    public $duration_of_employment_from;
    public $duration_of_employment_to;
    public $responsilibities;

    public $current_employer2;
    public $company_name2;
    public $company_address2;
    public $position_held2;
    public $duration_of_employment_from2;
    public $duration_of_employment_to2;
    public $responsilibities2;

    public $position_id;

    public $year_began;
    public $institution_name;
    public $certificate;
    public $year_of_graduation;

    public $year_began2;
    public $institution_name2;
    public $certificate2;
    public $year_of_graduation2;

    public $year_began3;
    public $institution_name3;
    public $certificate3;
    public $year_of_graduation3;

    public $school_name;
    public $secondary_certificate;
    public $year_of_completion;

    public $referee_name;
    public $referee_position;
    public $referee_company;
    public $referee_number;
    public $referee_email;

    public $referee_name2;
    public $referee_position2;
    public $referee_company2;
    public $referee_number2;
    public $referee_email2;

    public $skills_certificate;
    public $reason;
    public $availability;

    public $image;
    public $cv;
    public $cerificates_acquired;
    public $cover_letter;
    public $other_relevant_doc;

    public $agreement = [];
    public $signature;
    public $date;

    public $status;

    public $message = 'Hello There';

    // public $jobDesc = PostJobs::where('','');



    public $totalSteps = 7;
    public $currentStep = 1;
    
    public function mount() {
        $this -> currentStep = 1;
    }



    public function render()
    {
        return view('livewire.job-application');
    }

    public function increaseStep() {
        $this -> resetErrorBag();
        $this -> validateData();
        $this -> currentStep++;
        if ($this -> currentStep > $this -> totalSteps) {
            $this -> currentStep = $this -> totalSteps;
        }
    }

    public function decreaseStep() {
        $this -> resetErrorBag();
        $this -> currentStep--;
        if ($this -> currentStep < 1) {
            $this -> currentStep = 1;
        }
    }

    public function validateData() {
        if($this -> currentStep == 1) {
            $this -> validate([
                'first_name' => 'required|string',
                'middle_name' => 'string',
                'last_name' => 'required|string',
                'dob' => 'required',
                'gender' => 'required',
                'nationality' => 'required|string',
                'address' => 'required|string',
                'number' => 'required|digits:10',
                'email' => 'required|email'
            ]);
        } elseif ($this -> currentStep == 2) {
            $this -> validate([
                'current_employer' => 'string',
                'company_name' => 'string',
                'company_address' => 'string',
                'position_held' => 'string',
                'duration_of_employment_from' => 'string',
                'duration_of_employment_to' => 'string', 
                'responsilibities' => 'string|min:10|max:500',

                'current_employer2' => 'string',
                'company_name2' => 'string',
                'company_address2' => 'string',
                'position_held2' => 'string',
                'duration_of_employment_from2' => 'string',
                'duration_of_employment_to2' => 'string',
                'responsilibities2' => 'string|min:10|max:500',

                // 'position' => 'string'
            ]);
        } elseif ($this -> currentStep == 3) {
            $this -> validate([
                'year_began' => 'sring',
                'institution_name' => 'sring',
                'certificate' => 'sring',
                'year_of_graduation' => 'sring',

                'year_began2' => 'sring',
                'institution_name2' => 'sring',
                'certificate2' => 'sring',
                'year_of_graduation2' => 'sring',

                'year_began3' => 'string',
                'institution_name3' => 'string',
                'certificate3' => 'string',
                'year_of_graduation3' => 'string',

                'school_name' => 'string',
                'secondary_certificate' => 'string',
                'year_of_completion' => 'string'
            ]);
        } elseif ($this -> currentStep == 4) {
            $this -> validate([
                'referee_name' => 'string',
                'referee_position' => 'string',
                'referee_company' => 'string',
                'referee_number' => 'string',
                'referee_email' => 'email',

                'referee_name2' => 'string',
                'referee_position2' => 'string',
                'referee_company2' => 'string',
                'referee_number2' => 'string',
                'referee_email2' => 'email'
            ]);
        } elseif ($this -> currentStep == 5) {
            $this -> validate([
                'skills_certificate' => 'string',
                'reason' => 'string|min:20|max:500',
                'availability' => 'string',
            ]);
        } elseif ($this -> currentStep == 6) {
            $this -> validate([
                'image' => 'mimes:jpg,png,jpeg|max:1048576',
                'cv' => 'mimes:pdf,docx,doc|max:1048576',
                'cerificates_acquired' => 'mimes:pdf,docx,doc|max:1048576',
                'cover_letter' => 'mimes:pdf,docx,doc|max:1048576',
                'other_relevant_doc' => 'mimes:pdf,docx,doc|max:1048576',
            ]);
        } 
    }

    public function jobapply() {
        $this -> resetErrorBag();

        if ($this -> currentStep == 7) {
            $this -> validate([
                'agreement' => 'required|array|min:1|max:1',
                'signature' => 'required',
                'date' => 'required',
            ]);
        }
        $image_name = 'IM_'.$this -> image -> getClientOriginalName();
        $cv_name = 'CV_'.$this -> cv -> getClientOriginalName();
        $cerificates_acquired_name = 'CA_'.$this -> cerificates_acquired -> getClientOriginalName();
        $cover_letter_name = 'CL_'.$this -> cover_letter -> getClientOriginalName();
        $other_relevant_doc_name = 'ORD_'.$this -> other_relevant_doc -> getClientOriginalName();

        $upload_image = $this -> image -> storeAs('applicants_images', $image_name);
        $upload_cv = $this -> cv -> storeAs('applicants_docs', $cv_name);
        $upload_cerificates_acquired = $this -> cerificates_acquired -> storeAs('applicants_docs', $cerificates_acquired_name);
        $upload_cover_letter = $this -> cover_letter -> storeAs('applicants_docs', $cover_letter_name);
        $upload_other_relevant_doc = $this -> other_relevant_doc -> storeAs('applicants_docs', $other_relevant_doc_name);

        if ($upload_cv && $upload_cerificates_acquired && $upload_cover_letter && $upload_other_relevant_doc && $upload_image) {
            $values = array(
            // "applicant_id" => $this -> applicant_id = $applicant_id,
            "first_name" => $this -> first_name,
            "middle_name" => $this -> middle_name,
            "last_name" => $this -> last_name,
            "dob" => $this -> dob,
            "gender" => $this -> gender,
            "nationality" => $this -> nationality,
            "address" => $this -> address,
            "number" => $this -> number,
            "email" => $this -> email,

            "current_employer" => $this -> current_employer,
            "company_name" => $this -> company_name,
            "company_address" => $this -> company_address,
            "position_held" => $this -> position_held,
            "duration_of_employment_from" => $this -> duration_of_employment_from,
            "duration_of_employment_to" => $this -> duration_of_employment_to,
            "responsilibities" => $this -> responsilibities,

            "current_employer2" => $this -> current_employer2,
            "company_name2" => $this -> company_name2,
            "company_address2" => $this -> company_address2,
            "position_held2" => $this -> position_held2,
            "duration_of_employment_from2" => $this -> duration_of_employment_from2,
            "duration_of_employment_to2" => $this -> duration_of_employment_to2,
            "responsilibities2" => $this -> responsilibities2,

            // "position" => $jobDesc = App\Model\JobDetails::find($this -> position),
            // "position" => $this -> position_id,

            "year_began" => $this -> year_began,
            "institution_name" => $this -> institution_name,
            "certificate" => $this -> certificate,
            "year_of_graduation" => $this -> year_of_graduation,

            "year_began2" => $this -> year_began2,
            "institution_name2" => $this -> institution_name2,
            "certificate2" => $this -> certificate2,
            "year_of_graduation2" => $this -> year_of_graduation2,

            "year_began3" => $this -> year_began3,
            "institution_name3" => $this -> institution_name3,
            "certificate3" => $this -> certificate3,
            "year_of_graduation3" => $this -> year_of_graduation3,

            "school_name" => $this -> school_name,
            "secondary_certificate" => $this -> secondary_certificate,
            "year_of_completion" => $this -> year_of_completion,
            
            "referee_name" => $this -> referee_name,
            "referee_position" => $this -> referee_position,
            "referee_company" => $this -> referee_company,
            "referee_number" => $this -> referee_number,
            "referee_email" => $this -> referee_email,

            "referee_name2" => $this -> referee_name2,
            "referee_position2" => $this -> referee_position2,
            "referee_company2" => $this -> referee_company2,
            "referee_number2" => $this -> referee_number2,
            "referee_email2" => $this -> referee_email2,

            "skills_certificate" => $this -> skills_certificate,
            "reason" => $this -> reason,
            "availability" => $this -> availability,

            "image" => $image_name,
            "cv" => $cv_name,
            "cerificates_acquired" => $cerificates_acquired_name,
            "cover_letter" => $cover_letter_name,
            "other_relevant_doc" => $other_relevant_doc_name,

            "agreement" => json_encode($this-> agreement),
            "signature" => $this -> signature,
            "date" => $this -> date,

            "status" => $this -> status = "Submitted" 

            );
            JobDetails::updateOrCreate($values);
            // $this -> reset();
            $this -> currentStep = 1;
        }
    }
}
