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
        /* padding: 10px; */
        /* margin: 10px; */

    }

</style>

<ul class="fieldset-containter">
    <li class="fieldset"> Personal Information</li>  
    <li class="fieldset">Work Experience</li>
    <li class="fieldset">Educational Background</li>
    <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Referee</li>
    <li class="fieldset">Other Relevant</li>
    <li class="fieldset">Document Uploads</li>
    <li class="fieldset agree">Agreement and Declaration</li>
</ul>

<div class="container">
  
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6 offset-md-3">
            <h2 class="form-title" style="margin-top: 50px">Job Application Form</h2>

            <form action="{{url('/update-referee')}}" method="POST">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif

                @csrf

                <div class="footer text-right">
                    <a href="/education"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/other-relevant"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
<br>
                <fieldset>
                    <legend>Referees</legend>
                        <input type="text" name="personal_id" hidden value="{{$ref -> personal_id}}">
                    
                    <div class="form-group">
                        <label for="first-name">Name <span>*</span></label>
                        <input type="text" name="referee_name" required placeholder="Enter Referral Name" value="{{$ref -> referee_name}}">
                        <span class="text-danger">@error('referee_name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="middle-name">Position <span>*</span></label>
                        <input type="text" name="referee_position" required placeholder="Enter Referral Position" value="{{$ref -> referee_position}}">
                        <span class="text-danger">@error('referee_position'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Company/Organization <span>*</span></label>
                        <input type="text" name="referee_company" required placeholder="Enter Referral Company/Organization" value="{{$ref -> referee_company}}">
                        <span class="text-danger">@error('referee_company'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="dob">Contact Number <span>*</span></label>
                        <input type="text" name="referee_number" required placeholder="Enter Referral Contact Number" value="{{$ref -> referee_number}}">
                        <span class="text-danger">@error('referee_number'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="dob">Email Address <span>*</span></label>
                        <input type="email" name="referee_email" required placeholder="Enter Email Address. Eg; referral@gmail.com" value="{{$ref -> referee_email}}">
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
                        <input type="text" name="referee_name2" required placeholder="Enter Referral Name" value="{{$ref -> referee_name2}}">
                        <span class="text-danger">@error('referee_name2'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="middle-name">Position <span>*</span></label>
                        <input type="text" name="referee_position2" required placeholder="Enter Referral Position" value="{{$ref -> referee_position2}}">
                        <span class="text-danger">@error('referee_positiion2'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Company/Organization <span></span></label>
                        <input type="text" name="referee_company2" required placeholder="Enter Referral Company/Organization" value="{{$ref -> referee_company2}}">
                        <span class="text-danger">@error('referee_company2'){{ $message }} @enderror</span>
                    </div>
        
                    <div class="form-group">
                        <label for="dob">Contact Number <span>*</span></label>
                        <input type="text" name="referee_number2" required placeholder="Enter Referral Contact Number" value="{{$ref -> referee_number2}}">
                        <span class="text-danger">@error('referee_number2'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="dob">Email Address <span>*</span></label>
                        <input type="email" name="referee_email2" required placeholder="Enter Referral Email Address. Eg; referral@gmail.com" value="{{$ref -> referee_email2}}">
                        <span class="text-danger">@error('referee_email2'){{ $message }} @enderror</span>
                    </div>
                </fieldset>
                <div class="card-footer text-right">
                    <a href="/education"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/other-relevant"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection