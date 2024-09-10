@extends('layouts.main-layout')
@section('content')
@include('includes.header')

<style>

body {
        font-family: Arial, sans-serif;
        background-color: #f1f3f4;
        margin: 0;
        padding: 0;
    }
    
    /* .container {
        width: 60%;
        margin: 20px auto;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    } */
    
    .header {
        text-align: center;
        padding: 20px;
    }
    
    .logo {
        max-width: 100px;
        margin-bottom: 10px;
    }
    
    h1 {
        margin: 0;
        font-size: 24px;
        color: #005687;
    }
    
    .form-title {
        background-color: #51B3E4;
        color: white;
        padding: 10px;
        border-radius: 4px;
        margin: 20px 0;
        text-align: center;
    }
    
    .account-info {
        background-color: #e7f0f8;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 20px;
    }
    
    .account-info p {
        margin: 5px 0;
        font-size: 14px;
    }
    
    .info-text {
        color: #666;
    }
    
    .required-text {
        color: #d93025;
        font-size: 12px;
    }
    
    .application-form {
        margin-top: 20px;
    }
    
    fieldset {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 4px;
    }
    
    legend {
        font-size: 18px;
        color: white;
        background-color: #51B3E4;
        padding: 5px 10px;
        border-radius: 4px;
    }
    
    .form-group {
        margin-bottom: 15px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    input[type="text"],
    input[type="date"], 
    input[type="email"],
    input[type="file"],
    input[type='month'],
    textarea,
    select {
        width: calc(100% - 20px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f9f9f9;
    }
    
    input[type="radio"] {
        margin-right: 5px;
    }
    
    label span {
        color: #d93025;
    }

    .fieldset {
        /* border: 1px solid #005687; */
        /* background-color: #005687; */
        width: 240px;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        color: #000000;
        font-weight: bold
    }

    .fieldset-containter {
        position: absolute;
        left: 50px;
        padding: 10px;
        margin: 10px;

    }

    .buttons {
        margin-bottom: 20px;
    }

    .step { display: none; }
    .step.active { display: block; }
    
    </style>



<div class="container">
  
    <div class="row" style="margin-top: 100px;">
        <div class="col-md-6 offset-md-3">
            <h2 class="form-title" style="margin-top: 70px">Job Application Form</h2>
    <form action="{{route('new.form')}}" method="POST" id="multiStepForm" enctype="multipart/form-data">
        @csrf
        <fieldset id="personal" class="step active">
        <div> 
            <div class="buttons">
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                <button type="submit" class="btn btn-success">Save and Continue</button>
            </div>
            <legend>Personal Information</legend>
            <input type="text" value="{{$data -> applicant_id}}" hidden name="applicant_id">
    <div class="form-group">
        <label for="first-name">First Name <span>*</span></label>
        <input type="text" name="first_name" value="{{old('last_name', $data -> first_name ?? '' )}}" placeholder="Enter First Name" required>
        <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="middle-name">Middle Name <span></span></label>
        <input type="text" name="middle_name" value="{{ $data -> middle_name ?? '' }}" placeholder="Enter Middle Name">
        <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="last-name">Last Name <span>*</span></label>
        <input type="text" name="last_name" value="{{ $data -> last_name ?? '' }}" required placeholder="Enter Last Name">
        <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth <span>*</span></label>
        <input type="date" name="dob" value="{{ $data -> dob ?? '' }}" required placeholder="Enter Last Name">
        <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label>Gender <span>*</span></label>
        <label><input type="radio" name="gender" value="male"> Male</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
        <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="nationality">Nationality <span>*</span></label>
        <input type="text" name="nationality" value="{{ $data -> nationality ?? '' }}" required placeholder="Enter Nationality. Eg; Ghanaian">
        <span class="text-danger">@error('nationality'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Address <span>*</span></label>
        <input type="text" name="address" value="{{ $data -> address ?? '' }}" required placeholder="Enter Address">
        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Phone Number <span>*</span></label>
        <input type="text" name="number" value="{{ $data -> number ?? '' }}" required placeholder="Enter Phone Number">
        <span class="text-danger">@error('number'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Email <span>*</span></label>
        <input type="email" name="email" value="{{ $data -> email ?? '' }}" required placeholder="Enter Email Eg; youremail@gmail.com">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
            
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            <button type="submit" class="btn btn-success">Save and Continue</button>
        </div>
        </fieldset>
  
  
        <fieldset id="experience" class="step">
                @csrf
        <div >
            <div class="buttons">
                <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                <button type="submit" class="btn btn-success">Save and Continue</button>
            </div>

                <legend>Work Experience</legend>
                <input type="text" name="applicant_id" hidden>
                <div class="form-group">
                    <label for="first-name">Current/Most Recent Employer <span>*</span></label>
                    <input type="text" name="current_employer" required placeholder="Enter Current/Most Recent Employer">
                    <span class="text-danger">@error('current_employer'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Company Name <span>*</span></label>
                    <input type="text" name="company_name" required placeholder="Enter Company Name">
                    <span class="text-danger">@error('company_name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Company Address <span>*</span></label>
                    <input type="text" name="company_address" required placeholder="Enter Company Address">
                    <span class="text-danger">@error('company_address'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Position Held <span>*</span></label>
                    <input type="text" name="position_held" required placeholder="Enter Position Held">
                    <span class="text-danger">@error('position_held'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Duration of Employment (From - To) <span>*</span></label>
                    <input type="month" name="duration_of_employment_from" required placeholder="Enter Duration of Employment (From)"> 
                    <span class="text-danger">@error('duration_of_employment_from'){{ $message }} @enderror</span>
                    <br><br>
                    <input type="month" name="duration_of_employment_to" required placeholder="Enter Duration of Employment (To)">
                    <span class="text-danger">@error('duration_of_employment_to'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="dob">Responsibilities <span>*</span></label>
                    <textarea name="responsilibities" cols="70" rows="6"></textarea>
                    <span class="text-danger">@error('responsilibities'){{ $message }} @enderror</span>
                </div>
                <br>
                <hr>
                <br>
                <div class="form-group">
                    <label>Previous Employer <span>*</span></label>
                    <input type="text" name="current_employer2" required placeholder="Enter Previous Employer">
                    <span class="text-danger">@error('current_employer2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Company Name <span>*</span></label>
                    <input type="text" name="company_name2" required placeholder="Enter Company Name">
                    <span class="text-danger">@error('company_name2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Company Address <span>*</span></label>
                    <input type="text" name="company_address2" required placeholder="Enter Company Address">
                    <span class="text-danger">@error('company_address2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="nationality">Position Held <span>*</span></label>
                    <input type="text" name="position_held2" required placeholder="Enter Position Held">
                    <span class="text-danger">@error('position_held2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Duration of Employment (From - To) <span>*</span></label>
                    <input type="month" name="duration_of_employment_from2" required placeholder="Select Duration of Employment (From)"> 
                    <span class="text-danger">@error('duration_of_employment_from2'){{ $message }} @enderror</span>
                    <br><br>
                    <input type="month" name="duration_of_employment_to2" required placeholder="Select Duration of Employment (To)">
                    <span class="text-danger">@error('duration_of_employment_to2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="full-name">Responsibilities <span>*</span></label>
                    <textarea name="responsilibities2" cols="70" rows="6" required></textarea>
                    <span class="text-danger">@error('responsilibities2'){{ $message }} @enderror</span>
                </div>
                <input type="text" name="position" value="{{ $data -> position}}" hidden>

            <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            <button type="submit" class="btn btn-success">Save and Continue</button>
        </div>
    </fieldset>
    
    <fieldset class="step">
        <div >
            
                <div class="buttons">
                    <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    <button type="submit" class="btn btn-success" >Save and Continue</button>
                </div>
                <legend>Educational Background</legend>
                <div class="form-group">
                    <label for="first-name">Institution Name <span>*</span></label>
                    <input type="text" name="institution_name" required placeholder="Enter Name of Institution">
                    <span class="text-danger">@error('institution_name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Degree/Diploma Obtained <span>*</span></label>
                    <input type="text" name="certificate" required placeholder="Enter Degree/Diploma Obtained">
                    <span class="text-danger">@error('certificate'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Year Began <span>*</span></label>
                    <input type="month" name="year_began" required placeholder="Year Began">
                    <span class="text-danger">@error('year_began'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="dob">Year of Graduation <span>*</span></label>
                    <input type="month" name="year_of_graduation" required placeholder="Year of Graduation">
                    <span class="text-danger">@error('year_of_graduation'){{ $message }} @enderror</span>
                </div>
                <br>
                <hr>
                <br>
                <div class="form-group">
                    <label for="first-name">Institution Name <span>*</span></label>
                    <input type="text" name="institution_name2" required value="{{ $applicant -> institution_name2 ?? '' }}" placeholder="Enter Name of Institution">
                    <span class="text-danger">@error('institution_name2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Degree/Diploma Obtained <span>*</span></label>
                    <input type="text" name="certificate2" required value="{{ $applicant -> certificate2 ?? '' }}" placeholder="Enter Degree/Diploma Obtained">
                    <span class="text-danger">@error('certificate2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Year Began <span>*</span></label>
                    <input type="month" name="year_began2" required value="{{ $applicant -> year_began2 ?? '' }}" placeholder="Year Began">
                    <span class="text-danger">@error('year_began2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="dob">Year of Graduation <span>*</span></label>
                    <input type="month" name="year_of_graduation2" required value="{{ $applicant -> year_of_graduation2 ?? '' }}" placeholder="Year of Graduation">
                    <span class="text-danger">@error('year_of_graduation2'){{ $message }} @enderror</span>
                </div>
                <br>
                <hr>
                <br>
                <div class="form-group">
                    <label for="first-name">Institution Name <span></span></label>
                    <input type="text" name="institution_name3" required placeholder="Enter Name of Institution">
                    <span class="text-danger">@error('institution_name3'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Degree/Diploma Obtained <span></span></label>
                    <input type="text" name="certificate3" required placeholder="Enter Degree/Diploma Obtained">
                    <span class="text-danger">@error('certificate3'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Year Began <span></span></label>
                    <input type="month" name="year_began3" required placeholder="Year Began">
                    <span class="text-danger">@error('year_began3'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="dob">Year of Graduation <span></span></label>
                    <input type="month" name="year_of_graduation3" required placeholder="Year of Graduation">
                    <span class="text-danger">@error('year_of_graduation3'){{ $message }} @enderror</span>
                </div>
                <br>
                <hr>
                <br>
                <div class="form-group">
                    <label>Secondary Education <span></span></label>
                    <hr>
                </div>
                <div class="form-group">
                    <label for="nationality">School Name <span>*</span></label>
                    <input type="text" name="school_name" required placeholder="Year School Name">
                    <span class="text-danger">@error('school_name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="full-name">Certificate Obtained <span>*</span></label>
                    <input type="text" name="secondary_certificate" required placeholder="Year Certificate Obtained. Eg;WASSCE">
                    <span class="text-danger">@error('secondary_certificate'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="full-name">Year of Completion <span>*</span></label>
                    <input type="month" name="year_of_completion" required placeholder="Year Year of Completion">
                    <span class="text-danger">@error('year_of_completion'){{ $message }} @enderror</span>
                </div>
           

            <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            <button type="submit" class="btn btn-success" >Save and Continue</button>
        </div>
    </fieldset>

    <fieldset class="step">
        <div>
           
                <div class="buttons">
                    <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    <button type="submit" class="btn btn-success" >Save and Continue</button>
                </div>
                <legend>Referees</legend>
                <div class="form-group">
                    <label for="first-name">Name <span>*</span></label>
                    <input type="text" name="referee_name" required placeholder="Enter Referral Name">
                    <span class="text-danger">@error('referee_name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Position <span>*</span></label>
                    <input type="text" name="referee_position" required placeholder="Enter Referral Position">
                    <span class="text-danger">@error('referee_position'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Company/Organization <span>*</span></label>
                    <input type="text" name="referee_company" required placeholder="Enter Referral Company/Organization">
                    <span class="text-danger">@error('referee_company'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="dob">Contact Number <span>*</span></label>
                    <input type="text" name="referee_number" required placeholder="Enter Referral Contact Number">
                    <span class="text-danger">@error('referee_number'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="dob">Email Address <span>*</span></label>
                    <input type="email" name="referee_email" required placeholder="Enter Email Address. Eg; referral@gmail.com">
                    <span class="text-danger">@error('referee_email'){{ $message }} @enderror</span>
                </div>
                <br>
                <hr>
                <br>
                <div class="form-group">
                    <label>Other Referee<span></span></label>
                </div>
                    <hr>
                <div class="form-group">
                    <label for="first-name">Name <span>*</span></label>
                    <input type="text" name="referee_name2" required placeholder="Enter Referral Name">
                    <span class="text-danger">@error('referee_name2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Position <span>*</span></label>
                    <input type="text" name="referee_position2" required placeholder="Enter Referral Position">
                    <span class="text-danger">@error('referee_positiion2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Company/Organization <span></span></label>
                    <input type="text" name="referee_company2" required placeholder="Enter Referral Company/Organization">
                    <span class="text-danger">@error('referee_company2'){{ $message }} @enderror</span>
                </div>
    
                <div class="form-group">
                    <label for="dob">Contact Number <span>*</span></label>
                    <input type="text" name="referee_number2" required placeholder="Enter Referral Contact Number">
                    <span class="text-danger">@error('referee_number2'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="dob">Email Address <span>*</span></label>
                    <input type="email" name="referee_email2" required placeholder="Enter Referral Email Address. Eg; referral@gmail.com">
                    <span class="text-danger">@error('referee_email2'){{ $message }} @enderror</span>
                </div>
           
           
            <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            <button type="submit" class="btn btn-success" >Save and Continue</button>
        </div>
    </fieldset>

    <fieldset class="step">
        <div>
            
                <div class="buttons">
                    <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    <button type="submit" class="btn btn-success" >Save and Continue</button>
                </div>
                <legend>Other Relevant Information</legend>
                <div class="form-group">
                    <label for="first-name">Skills and Certifications <span>*</span></label>
                    <input type="text" name="skills_certificate" required placeholder="Enter Skills and Certifications">
                    <span class="text-danger">@error('skills_certificate'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Why do you want to work at Dernan Salt Limited? <span>*</span></label>
                    <textarea name="reason" cols="70" rows="6" required placeholder="Enter Why do you want to work at Dernan Salt Limited? Not more than 500 words"></textarea>
                    <span class="text-danger">@error('reason'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Availability <span>*</span></label>
                    <select name="availability">
                        <option selected>Select Availability</option>
                        <option value="Immediately">Immediately</option>
                        <option value="Immediately">Immediately</option>
                    </select>
                    <span class="text-danger">@error('availability'){{ $message }} @enderror</span>
                </div>
       
            
            <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            <button type="submit" class="btn btn-success" >Save and Continue</button>
        </div>
    </fieldset>

    <fieldset class="step">
        <div>
                <div class="buttons">
                    <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    <button type="submit" class="btn btn-success" >Save and Continue</button>
                </div>
                <legend>Document Uploads</legend>
                <div class="form-group">
                    <label for="first-name">Upload your Image <span>*</span></label>
                    <input type="file" name="image" required>
                    <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="first-name">Upload your CV <span>*</span></label>
                    <input type="file" name="cv" required>
                    <span class="text-danger">@error('cv'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Upload your Certificates <span></span></label>
                    <input type="file" name="cerificates_acquired">
                    <span class="text-danger">@error('cerificates_acquired'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Upload your Cover Letter <span>*</span></label>
                    <input type="file" name="cover_letter" required>
                    <span class="text-danger">@error('cover_letter'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Upload any other relevant documents <span></span></label>
                    <input type="file" name="other_relevant_doc">
                    <span class="text-danger">@error('other_relevant_doc'){{ $message }} @enderror</span>
                </div>

           
            <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            <button type="submit" class="btn btn-success" >Save and Continue</button>
        </div>
    </fieldset>

    <fieldset class="step">
        <div>
                <div class="buttons">
                    <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
                    {{-- <button type="submit" class="btn btn-success" formaction="{{ route('user.store') }}">Submit</button> --}}
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                <legend>Agreement and Declaration</legend>
                <div class="form-group">
                    <label>Agreement <span>*</span></label>
                    <p>By selecting "I agree," I certify that the information provided is true and accurate to the 
                       best of my knowledge. I understand that providing false
                       information may lead to the disqualification of my application
                       or termination of my employment if discovered after being hired.
                    </p>
                    <label><input type="checkbox" name="agreement" value="I Agree"> I Agree</label>
                    <label><input type="checkbox" name="agreement" value="I Disagree"> I Disagree</label>
                    <span class="text-danger">@error('agreement'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Applicant's Signature <span>*</span></label>
                    <input type="text" name="signature" placeholder="Please type your full name as a digital signature." required>
                    <span class="text-danger">@error('signature'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="last-name">Date <span>*</span></label>
                    <input type="date" name="date" required>
                    <span class="text-danger">@error('date'){{ $message }} @enderror</span>
                </div>
                <input type="text" name="status" hidden>
            
            <button type="button" class="btn btn-primary" onclick="prevStep()">Previous</button>
            {{-- <button type="submit" class="btn btn-success" formaction="{{ route('user.store') }}">Submit</button> --}}
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </fieldset>

</form>
        </div>
        </div>
    </div>

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.step');

        function showStep(index) {
            steps.forEach((step, i) => {
                step.classList.toggle('active', i === index);
            });
        }

        function nextStep() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        showStep(currentStep);
    </script>

{{-- <div class="container">
  
    <div class="row" style="margin-top: 250px;">
        <div class="col-md-6 offset-md-3">

            <form action="{{url('/apply/create-step-one')}}" method="POST">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif
                @csrf
<fieldset id="personal">
    <input type="text" name="applicant_id" hidden value="1">
    <legend>Personal Information</legend>
    <div class="form-group">
        <label for="first-name">First Name <span>*</span></label>
        <input type="text" name="first_name" value="{{ $applicant -> first_name ?? '' }}" placeholder="Enter First Name" required>
        <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="middle-name">Middle Name <span></span></label>
        <input type="text" name="middle_name" value="{{ $applicant -> middle_name ?? '' }}" placeholder="Enter Middle Name">
        <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="last-name">Last Name <span>*</span></label>
        <input type="text" name="last_name" value="{{ $applicant -> last_name ?? '' }}" required placeholder="Enter Last Name">
        <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth <span>*</span></label>
        <input type="date" name="dob" value="{{ $applicant -> dob ?? '' }}" required placeholder="Enter Last Name">
        <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label>Gender <span>*</span></label>
        <label><input type="radio" name="gender" value="male"> Male</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
        <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="nationality">Nationality <span>*</span></label>
        <input type="text" name="nationality" value="{{ $applicant -> nationality ?? '' }}" required placeholder="Enter Nationality. Eg; Ghanaian">
        <span class="text-danger">@error('nationality'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Address <span>*</span></label>
        <input type="text" name="address" value="{{ $applicant -> address ?? '' }}" required placeholder="Enter Address">
        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Phone Number <span>*</span></label>
        <input type="text" name="number" value="{{ $applicant -> number ?? '' }}" required placeholder="Enter Phone Number">
        <span class="text-danger">@error('number'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Email <span>*</span></label>
        <input type="email" name="email" value="{{ $applicant -> email ?? '' }}" required placeholder="Enter Email Eg; youremail@gmail.com">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
</fieldset>

<div class="card-footer text-right">
    <button type="submit" class="btn btn-primary">Save</button>
    {{-- @if (Session::has('success')) --}}
     {{-- <a href="{{url('/apply-create-step-two/'.$applicant -> applicant_id)}}"><button type="button" class="btn btn-primary">Next</button></a> --}}
    {{-- <div class="alert alert-danger">{{ Session::get('fail') }}</div> --}}
    {{-- @endif --}}
   
{{-- </div>
</form>
</div>
</div>
</div> --}}

@endsection