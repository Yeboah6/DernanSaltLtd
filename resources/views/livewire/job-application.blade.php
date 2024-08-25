<div>
    <h2 class="form-title" style="margin-top: 50px">Job Application Form</h2>

    {{-- <h6>Personal Information</h6> --}}
    <ul class="fieldset-containter">
        @if ($currentStep == 1)
            <li class="fieldset" style="background-color: #51B3E4;color:#fff;"><a href="#personal" wire:navigate> Personal Information</a></li>  
            <li class="fieldset">Work Experience</li>
            <li class="fieldset">Educational Background</li>
            <li class="fieldset">Referee</li>
            <li class="fieldset">Other Relevant</li>
            <li class="fieldset">Document Uploads</li>
            <li class="fieldset agree">Agreement and Declaration</li>  
        @endif

        @if ($currentStep == 2)
        <li class="fieldset"><a href="#personal" wire:navigate> Personal Information</a></li>  
        <li class="fieldset" style="background-color: #51B3E4;color:#fff;"> <a href="#experience" class="pagination-class">Work Experience </a> </li>
        <li class="fieldset">Educational Background</li>
        <li class="fieldset">Referee</li>
        <li class="fieldset">Other Relevant</li>
        <li class="fieldset">Document Uploads</li>
        <li class="fieldset agree">Agreement and Declaration</li>  
        @endif
        
        @if ($currentStep == 3)
        <li class="fieldset">Personal Information</li>  
        <li class="fieldset">Work Experience</li>
        <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Educational Background</li>
        <li class="fieldset">Referee</li>
        <li class="fieldset">Other Relevant</li>
        <li class="fieldset">Document Uploads</li>
        <li class="fieldset agree">Agreement and Declaration</li>  
        @endif

        @if ($currentStep == 4)
        <li class="fieldset">Personal Information</li>  
        <li class="fieldset">Work Experience</li>
        <li class="fieldset">Educational Background</li>
        <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Referee</li>
        <li class="fieldset">Other Relevant</li>
        <li class="fieldset">Document Uploads</li>
        <li class="fieldset agree">Agreement and Declaration</li>  
        @endif

        @if ($currentStep == 5)
        <li class="fieldset">Personal Information</li>  
        <li class="fieldset">Work Experience</li>
        <li class="fieldset">Educational Background</li>
        <li class="fieldset">Referee</li>
        <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Other Relevant</li>
        <li class="fieldset">Document Uploads</li>
        <li class="fieldset agree">Agreement and Declaration</li>  
        @endif

        @if ($currentStep == 6)
        <li class="fieldset">Personal Information</li>  
        <li class="fieldset">Work Experience</li>
        <li class="fieldset">Educational Background</li>
        <li class="fieldset">Referee</li>
        <li class="fieldset">Other Relevant</li>
        <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Document Uploads</li>
        <li class="fieldset agree">Agreement and Declaration</li>  
        @endif

        @if ($currentStep == 7)
        <li class="fieldset">Personal Information</li>
        <li class="fieldset">Work Experience</li>
        <li class="fieldset">Educational Background</li>
        <li class="fieldset">Referee</li>
        <li class="fieldset">Other Relevant</li>
        <li class="fieldset">Document Uploads</li>
        <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Agreement and Declaration</li>  
        @endif
    </ul>

    <form class="application-form" wire:submit.prevent="jobapply">

        <div class="action-button d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($currentStep == 1)
                <div></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 || $currentStep == 7 )
                <button type="button" class="btn btn-sm btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif
            
            @if ($currentStep == 1|| $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6)
                <button type="button" class="btn btn-sm btn-primary" wire:click="increaseStep()">Next</button>
            @endif
            @if ($currentStep == 7)
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            @endif
            
        </div>

        @if ($currentStep == 1)
            {{-- Personal Info SECTION 1 --}}
        <fieldset id="personal">
            <legend>Personal Information</legend>
            <div class="form-group">
                <label for="first-name">First Name <span>*</span></label>
                <input type="text" wire:model="first_name" required>
                <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="middle-name">Middle Name <span></span></label>
                <input type="text" wire:model="middle_name">
                <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name <span>*</span></label>
                <input type="text" wire:model="last_name" required>
                <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth <span>*</span></label>
                <input type="date" wire:model="dob" required>
                <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label>Gender <span>*</span></label>
                <label><input type="radio" wire:model="gender" value="male"> Male</label>
                <label><input type="radio" wire:model="gender" value="female"> Female</label>
                <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="nationality">Nationality <span>*</span></label>
                <input type="text" wire:model="nationality" required>
                <span class="text-danger">@error('nationality'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="full-name">Address <span>*</span></label>
                <input type="text" wire:model="address" required>
                <span class="text-danger">@error('address'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="full-name">Phone Number <span>*</span></label>
                <input type="text" wire:model="number" required>
                <span class="text-danger">@error('number'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="full-name">Email <span>*</span></label>
                <input type="email" wire:model="email" required>
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            {{-- @persist()
            @livewire('') --}}
        </fieldset>

        @endif

        @if ($currentStep == 2)
                
            {{-- Work Experience SECTION 2 --}}

        <fieldset id="experience">
            <legend>Work Experience</legend>
            <div class="form-group">
                <label for="first-name">Current/Most Recent Employer <span>*</span></label>
                <input type="text" wire:model="current_employer" required>
                <span class="text-danger">@error('current_employer'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="middle-name">Position Held <span>*</span></label>
                <input type="text" wire:model="position_held" required>
                <span class="text-danger">@error('position_held'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="last-name">Duration of Employment (From - To) <span>*</span></label>
                <input type="text" wire:model="duration_of_employment" required>
                <span class="text-danger">@error('duration_of_employment'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="dob">Responsibilities <span>*</span></label>
                <textarea wire:model="responsilibities" cols="70" rows="6"></textarea>
                <span class="text-danger">@error('responsilibities'){{ $message }} @enderror</span>
            </div>
            <br>
            <hr>
            <br>
            <div class="form-group">
                <label>Previous Employer <span>*</span></label>
                <input type="text" wire:model="current_employer2" required>
                <span class="text-danger">@error('current_employer2'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="nationality">Position Held <span>*</span></label>
                <input type="text" wire:model="position_held2" required>
                <span class="text-danger">@error('position_held2'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="full-name">Duration of Employment (From - To) <span>*</span></label>
                <input type="text" wire:model="duration_of_employment2" required>
                <span class="text-danger">@error('duration_of_employment2'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="full-name">Responsibilities <span>*</span></label>
                <textarea wire:model="responsilibities2" cols="70" rows="6" required></textarea>
                <span class="text-danger">@error('responsilibities2'){{ $message }} @enderror</span>
            </div>

            {{-- @foreach ($position as $position)
                <input type="text" wire:model="position" value="{{$position -> id}}" hidden>    
            @endforeach --}}
        </fieldset>

        @endif

        @if ($currentStep ==3)
                
            {{-- Educational Background SECTION 3 --}}
        <fieldset>
            <legend>Educational Background</legend>
            <div class="form-group">
                <label for="first-name">Institution Name <span>*</span></label>
                <input type="text" wire:model="institution_name" required>
                <span class="text-danger">@error('institution_name'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="middle-name">Degree/Diploma Obtained <span>*</span></label>
                <input type="text" wire:model="certificate" required>
                <span class="text-danger">@error('certificate'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="last-name">Highest Qualification <span></span></label>
                <input type="text" wire:model="highest_qualification">
            </div>
            <div class="form-group">
                <label for="dob">Year of Graduation <span>*</span></label>
                <input type="date" wire:model="year_of_graduation" required>
                <span class="text-danger">@error('year_of_graduation'){{ $message }} @enderror</span>
            </div>
            <br>
            <hr>
            <br>
            <div class="form-group">
                <label>Secondary Education <span>*</span></label>
                <hr>
            </div>
            <div class="form-group">
                <label for="nationality">School Name <span>*</span></label>
                <input type="text" wire:model="school_name" required>
                <span class="text-danger">@error('school_name'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="full-name">Certificate Obtained <span>*</span></label>
                <input type="text" wire:model="secondary_certificate" required>
                <span class="text-danger">@error('secondary_certificate'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="full-name">Year of Completion <span>*</span></label>
                <input type="date" wire:model="year_of_completion" required>
                <span class="text-danger">@error('year_of_completion'){{ $message }} @enderror</span>
            </div>
        </fieldset>
            
        @endif

        @if ($currentStep ==4)

            {{-- Referee SECTION 4 --}}
        <fieldset>
            <legend>Referees</legend>
            <div class="form-group">
                <label for="first-name">Name <span>*</span></label>
                <input type="text" wire:model="referee_name" required>
                <span class="text-danger">@error('referee_name'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="middle-name">Position <span>*</span></label>
                <input type="text" wire:model="referee_position" required>
                <span class="text-danger">@error('referee_position'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="last-name">Company/Organization <span>*</span></label>
                <input type="text" wire:model="referee_company" required>
                <span class="text-danger">@error('referee_company'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="dob">Contact Number <span>*</span></label>
                <input type="text" wire:model="referee_number" required>
                <span class="text-danger">@error('referee_number'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="dob">Email Address <span>*</span></label>
                <input type="email" wire:model="referee_email" required>
                <span class="text-danger">@error('referee_email'){{ $message }} @enderror</span>
            </div>
            <br>
            <hr>
            <br>
            <div class="form-group">
                <label>Other Referee<span>*</span></label>
                <hr>
            <div class="form-group">
                <label for="first-name">Name <span>*</span></label>
                <input type="text" wire:model="referee_name2" required>
                <span class="text-danger">@error('referee_name2'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="middle-name">Position <span>*</span></label>
                <input type="text" wire:model="referee_position2" required>
                <span class="text-danger">@error('referee_positiion2'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="last-name">Company/Organization <span></span></label>
                <input type="text" wire:model="referee_company2" required>
                <span class="text-danger">@error('referee_company2'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label for="dob">Contact Number <span>*</span></label>
                <input type="text" wire:model="referee_number2" required>
                <span class="text-danger">@error('referee_number2'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="dob">Email Address <span>*</span></label>
                <input type="email" wire:model="referee_email2" required>
                <span class="text-danger">@error('referee_email2'){{ $message }} @enderror</span>
            </div>
        </fieldset>
            
        @endif

        @if ($currentStep ==5)

            {{-- Other Relevant Info SECTION 5 --}}
        <fieldset>
            <legend>Other Relevant Information</legend>
            <div class="form-group">
                <label for="first-name">Skills and Certifications <span>*</span></label>
                <input type="text" wire:model="skills_certificate" required>
                <span class="text-danger">@error('skills_certificate'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="middle-name">Why do you want to work at Dernan Salt Limited? <span>*</span></label>
                <textarea wire:model="reason" cols="70" rows="6" required></textarea>
                <span class="text-danger">@error('reason'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="last-name">Availability <span>*</span></label>
                <input type="text" wire:model="availability" required>
                <span class="text-danger">@error('availability'){{ $message }} @enderror</span>
            </div>
        </fieldset>
            
        @endif

        @if ($currentStep ==6)

            {{-- Document Uploads SECTION 6 --}}
        <fieldset>
            <legend>Document Uploads</legend>
            <div class="form-group">
                <label for="first-name">Upload your Image <span>*</span></label>
                <input type="file" wire:model="image" required>
                <span class="text-danger">@error('image'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="first-name">Upload your CV <span>*</span></label>
                <input type="file" wire:model="cv" required>
                <span class="text-danger">@error('cv'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="middle-name">Upload your Certificates <span></span></label>
                <input type="file" wire:model="cerificates_acquired">
                <span class="text-danger">@error('cerificates_acquired'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="last-name">Upload your Cover Letter <span>*</span></label>
                <input type="file" wire:model="cover_letter" required>
                <span class="text-danger">@error('cover_letter'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="last-name">Upload any other relevant documents <span></span></label>
                <input type="file" wire:model="other_relevant_doc">
                <span class="text-danger">@error('other_relevant_doc'){{ $message }} @enderror</span>
            </div>
        </fieldset>

        @endif

        @if ($currentStep ==7)
            
        {{-- Agreement and Declaration SECTION 7 --}}
        <fieldset>
            <legend>Agreement and Declaration</legend>
            <div class="form-group">
                <label>Agreement <span>*</span></label>
                <p>By selecting "I agree," I certify that the information provided is true and accurate to the 
                   best of my knowledge. I understand that providing false
                   information may lead to the disqualification of my application
                   or termination of my employment if discovered after being hired.
                </p>
                <label><input type="checkbox" wire:model="agreement" value="I Agree"> I Agree</label>
                <label><input type="checkbox" wire:model="agreement" value="I Disagree"> I Disagree</label>
                <span class="text-danger">@error('agreement'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="middle-name">Applicant's Signature <span>*</span></label>
                <input type="text" wire:model="signature" placeholder="Please type your full name as a digital signature." required>
                <span class="text-danger">@error('signature'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="last-name">Date <span>*</span></label>
                <input type="date" wire:model="date" required>
                <span class="text-danger">@error('date'){{ $message }} @enderror</span>
            </div>
            <input type="text" wire:model="status" hidden>
        </fieldset>

        
            
        @endif

        <div class="action-button d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($currentStep == 1)
                <div></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 || $currentStep == 7 )
                <button type="button" class="btn btn-sm btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif
            
            @if ($currentStep == 1|| $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6)
                <button type="button" class="btn btn-sm btn-primary" wire:click="increaseStep()">Next</button>
            @endif
            @if ($currentStep == 7)
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            @endif
            
        </div>
    </form>
</div>
 
