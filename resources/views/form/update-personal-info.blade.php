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
        <a href="/personal-info"><li class="fieldset" style="background-color: #51B3E4;color:#fff;"> Personal Information</li></a>  
        <a href="/work-experience"><li class="fieldset">Work Experience</li></a>
        <a href="/education"><li class="fieldset">Educational Background</li></a>
        <a href="/referee"><li class="fieldset">Referee</li></a>
        <a href="/other-relevant"><li class="fieldset">Other Relevant</li></a>
        <a href="/upload-docs"><li class="fieldset">Document Uploads</li></a>
        <a href="/agreement"><li class="fieldset agree">Agreement and Declaration</li></a>

        <ul>
            <a href="preview-application"><li class="fieldset">Preview Application</li></a>
        </ul>
</ul>

<div class="container">
  
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6 offset-md-3">
            <h2 class="form-title" style="margin-top: 50px">Job Application Form</h2>

            <form action="{{url('/update-personal-info')}}" method="POST">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif

                @csrf

                <div class="footer text-right">
                    <button type="submit" class="btn btn-success">Save</button>
                     <a href="/work-experience"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
                <br>
                <fieldset id="personal">
                    <input type="text" name="user_id" value="{{ $personal_info -> user_id}}" hidden>
                    <input type="text" name="applicant_id" hidden>
                    <legend>Personal Information</legend>
                    <div class="form-group">
                        <label for="first-name">First Name <span>*</span></label>
                            <input type="text" name="first_name" placeholder="Enter First Name" value="{{ $personal_info -> first_name}}"  required>
                        <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="middle-name">Middle Name <span></span></label>
                        <input type="text" name="middle_name" placeholder="Enter Middle Name" value="{{ $personal_info -> middle_name}}">
                        <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name <span>*</span></label>
                        <input type="text" name="last_name" required placeholder="Enter Last Name" value="{{ $personal_info -> last_name}}">
                        <span class="text-danger">@error('last_name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth <span>*</span></label>
                        <input type="date" name="dob" required placeholder="Enter Last Name" value="{{ $personal_info -> dob}}">
                        <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Gender <span>*</span></label>
                        <label><input type="radio" name="gender" value="Male" {{ $personal_info -> gender == 'Male' ? 'checked' : '' }}> Male</label>
                        <label><input type="radio" name="gender" value="Female" {{ $personal_info -> gender == 'Female' ? 'checked' : '' }}> Female</label>
                        <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="nationality">Nationality <span>*</span></label>
                        <input type="text" name="nationality" required placeholder="Enter Nationality. Eg; Ghanaian" value="{{ $personal_info -> nationality}}">
                        <span class="text-danger">@error('nationality'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="full-name">Address <span>*</span></label>
                        <input type="text" name="address" required placeholder="Enter Address" value="{{ $personal_info -> address}}">
                        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="full-name">Phone Number <span>*</span></label>
                        <input type="text" name="number" required placeholder="Enter Phone Number" value="{{ $personal_info -> number}}">
                        <span class="text-danger">@error('number'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="full-name">Email <span>*</span></label>
                        <input type="email" name="email" required value="{{ $personal_info -> email}}" placeholder="Enter Email Eg; youremail@gmail.com">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                </fieldset>

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-success">Save</button>
                     <a href="/work-experience"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection