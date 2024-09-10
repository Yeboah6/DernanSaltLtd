
<form class="application-form" wire:submit.prevent="jobapply">

    <div class="action-button d-flex justify-content-between pt-2 pb-2">
        @if ($currentStep == 1)
            <div></div>
        @endif
        @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 || $currentStep == 7 )
            <button type="button" class="btn btn-sm btn-secondary" wire:click="decreaseStep()">Back</button>
        @endif
        
        @if ($currentStep == 1|| $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6)
            <button type="submit" class="btn btn-sm btn-success">Save</button>
            <button type="button" class="btn btn-sm btn-success" wire:click="increaseStep()">Continue</button>
        @endif
        @if ($currentStep == 7)
            <button type="submit" class="btn btn-sm btn-success">Submit</button>
        @endif
        
    </div>

<fieldset id="personal">
    <input type="text" wire:model="applicant_id" hidden>
    <legend>Personal Information</legend>
    {{-- <h1>{{ $data -> applicant_id}}</h1> --}}
    <div class="form-group">
        <label for="first-name">First Name <span>*</span></label>
        <input type="text" wire:model="first_name" required placeholder="Enter First Name">
        <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="middle-name">Middle Name <span></span></label>
        <input type="text" wire:model="middle_name" placeholder="Enter Middle Name">
    </div>
    <div class="form-group">
        <label for="last-name">Last Name <span>*</span></label>
        <input type="text" wire:model="last_name" required placeholder="Enter Last Name">
        <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth <span>*</span></label>
        <input type="date" wire:model="dob" required placeholder="Enter Date of Birth">
        <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label>Gender <span>*</span></label>
        <label><input type="radio" wire:model="gender" value="Male"> Male</label>
        <label><input type="radio" wire:model="gender" value="Female"> Female</label>
        <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="nationality">Nationality <span>*</span></label>
        <input type="text" wire:model="nationality" required placeholder="Enter Nationality. Eg; Ghanaian">
        <span class="text-danger">@error('nationality'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Address <span>*</span></label>
        <input type="text" wire:model="address" required placeholder="Enter your Address">
        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Phone Number <span>*</span></label>
        <input type="text" wire:model="number" required placeholder="Enter your Phone Number">
        <span class="text-danger">@error('number'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Email <span>*</span></label>
        <input type="email" wire:model="email" required placeholder="Enter your Email">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
</fieldset>

</form>