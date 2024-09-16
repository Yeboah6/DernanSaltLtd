@extends('layouts.main-layout')
@section('content')
@include('includes.applicant-header')

<style>

.form-title {
        background-color: #51B3E4;
        color: white;
        padding: 10px;
        border-radius: 4px;
        margin: 20px 0;
        text-align: center;
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
        border: 1px solid #ffffff;
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
        top: 130px;
        /* left: 50px; */
        /* padding: 10px; */
        /* margin: 10px; */

    }

</style>

<ul class="fieldset-containter">
    <li class="fieldset"> Personal Information</li>  
    <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Work Experience</li>
    <li class="fieldset">Educational Background</li>
    <li class="fieldset">Referee</li>
    <li class="fieldset">Other Relevant</li>
    <li class="fieldset">Document Uploads</li>
    <li class="fieldset agree">Agreement and Declaration</li>
</ul>

<div class="container">
  
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6 offset-md-3">
            <h2 class="form-title" style="margin-top: 50px">Job Application Form</h2>

            <form action="{{url('/work-experience')}}" method="POST">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif

                @csrf

                <div class="card-footer text-right">
                    <a href="/update-personal-info"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/education"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
                <fieldset id="experience">
                    <legend>Work Experience</legend>
                    {{-- @foreach ($personal_id as $id) --}}
                        <input type="text" name="personal_id" value="{{$personal_id}}" hidden>
                    {{-- @endforeach --}}
                    
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
                    
                    <input type="text" name="position" value="{{$data -> position}}" hidden>
               

                </fieldset>
                <div class="card-footer text-right">
                    <a href="/update-personal-info"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/education"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection