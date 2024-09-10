@extends('layouts.main-layout')
@section('content')
@include('includes.header')

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
    <li class="fieldset">Work Experience</li>
    <li class="fieldset">Educational Background</li>
    <li class="fieldset">Referee</li>
    <li class="fieldset">Other Relevant</li>
    <li class="fieldset">Document Uploads</li>
    <li class="fieldset agree" style="background-color: #51B3E4;color:#fff;">Agreement and Declaration</li>
</ul>

<div class="container">
  
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6 offset-md-3">
            <h2 class="form-title" style="margin-top: 50px">Job Application Form</h2>

            <form action="{{url('/agreement')}}" method="POST">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif

                @csrf

                <div class="card-footer text-right">
                    <a href="/upload-docs"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                <fieldset>
                    <legend>Agreement and Declaration</legend>
                    @foreach ($personal_id as $id)
                        <input type="text" name="personal_id" hidden value="{{$id -> id}}">
                    @endforeach
                    
                    <div class="form-group">
                        <label>Agreement <span>*</span></label>
                        <p>By selecting "I agree," I certify that the information provided is true and accurate to the 
                           best of my knowledge. I understand that providing false
                           information may lead to the disqualification of my application
                           or termination of my employment if discovered after being hired.
                        </p>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="agreement" value="I Agree"> I Agree
                        <br>
                        <input type="checkbox" name="agreement" value="I Disagree"> I Disagree
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
                </fieldset>
                <div class="card-footer text-right">
                    <a href="/upload-docs"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection