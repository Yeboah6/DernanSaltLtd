<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\JobDetails;
use App\Models\PostJobs;

class JobApplication extends Component
{

    use WithFileUploads;
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
    public $position_held;
    public $duration_of_employment;
    public $responsilibities;

    public $current_employer2;
    public $position_held2;
    public $duration_of_employment2;
    public $responsilibities2;

    public $position;

    public $highest_qualification;
    public $institution_name;
    public $certificate;
    public $year_of_graduation;

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

    // public $jobDesc;


    public $totalSteps = 7;
    public $currentStep = 1;
    
    public function mount() {
        // $this -> jobDesc = $jobDesc;
        $this -> currentStep = 1;
    }



    public function render()
    {
        return view('livewire.job-application', [
            "position" => PostJobs::all()
        ]);
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
                'middle_name' => 'required|string',
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
                'current_employer' => 'required|string',
                'position_held' => 'required|string',
                'duration_of_employment' => 'required|string',
                'responsilibities' => 'required|string',

                'current_employer2' => 'required|string',
                'position_held2' => 'required|string',
                'duration_of_employment2' => 'required|string',
                'responsilibities2' => 'required|string',

                // 'position' => 'required|array|min:1|max:1'
            ]);
        } elseif ($this -> currentStep == 3) {
            $this -> validate([
                'highest_qualification' => 'required',
                'institution_name' => 'required',
                'certificate' => 'required',
                'year_of_graduation' => 'required',

                'school_name' => 'required',
                'secondary_certificate' => 'required',
                'year_of_completion' => 'required'
            ]);
        } elseif ($this -> currentStep == 4) {
            $this -> validate([
                'referee_name' => 'required|string',
                'referee_position' => 'required|string',
                'referee_company' => 'required|string',
                'referee_number' => 'required|string',
                'referee_email' => 'required|email',

                'referee_name2' => 'required|string',
                'referee_position2' => 'required|string',
                'referee_company2' => 'required|string',
                'referee_number2' => 'required|string',
                'referee_email2' => 'required|email'
            ]);
        } elseif ($this -> currentStep == 5) {
            $this -> validate([
                'skills_certificate' => 'required',
                'reason' => 'required',
                'availability' => 'required',
            ]);
        } elseif ($this -> currentStep == 6) {
            $this -> validate([
                'image' => 'required|mimes:jpg,png,jpeg|max:1048576',
                'cv' => 'required|mimes:pdf,docx,doc|max:1048576',
                'cerificates_acquired' => 'required|mimes:pdf,docx,doc|max:1048576',
                'cover_letter' => 'required|mimes:pdf,docx,doc|max:1048576',
                'other_relevant_doc' => 'required|mimes:pdf,docx,doc|max:1048576',
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
            "position_held" => $this -> position_held,
            "duration_of_employment" => $this -> duration_of_employment,
            "responsilibities" => $this -> responsilibities,

            "current_employer2" => $this -> current_employer2,
            "position_held2" => $this -> position_held2,
            "duration_of_employment2" => $this -> duration_of_employment2,
            "responsilibities2" => $this -> responsilibities2,

            // "position" => $jobDesc = App\Model\JobDetails::find($this -> position),
            "position" => $this -> position_id,

            "highest_qualification" => $this -> highest_qualification,
            "institution_name" => $this -> institution_name,
            "certificate" => $this -> certificate,
            "year_of_graduation" => $this -> year_of_graduation,

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
            JobDetails::insert($values);
            $this -> reset();
            $this -> currentStep = 1;
        }
    }
}
