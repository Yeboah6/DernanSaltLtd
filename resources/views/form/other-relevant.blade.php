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
    <li class="fieldset">Work Experience</li>
    <li class="fieldset">Educational Background</li>
    <li class="fieldset">Referee</li>
    <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Other Relevant</li>
    <li class="fieldset">Document Uploads</li>
    <li class="fieldset agree">Agreement and Declaration</li>
</ul>

<div class="container">
  
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6 offset-md-3">
            <h2 class="form-title" style="margin-top: 50px">Job Application Form</h2>

            <form action="{{url('/other-relevant')}}" method="POST">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif

                @csrf

                <div class="card-footer text-right">
                    <a href="/referee"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/upload-docs"><button type="button" class="btn btn-primary">Next</button></a>
                </div>

                <fieldset>
                    <legend>Other Relevant Information</legend>
                        <input type="text" name="personal_id" hidden value="{{$personal_id}}">
                    
                    <div class="form-group">
                        <label for="first-name">Skills and Certifications <span>*</span></label>
                        <input type="text" name="skills_certificate" required placeholder="Enter Skills and Certifications">
                        <span class="text-danger">@error('skills_certificate'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="middle-name">Why do you want to work at Dernan Salt Limited? <span>*</span></label>
                        <textarea name="reason" cols="70" rows="6" required placeholder="Enter Why do you want to work at Dernan Salt Limited? Not more than 200 words"></textarea>
                        <span class="text-danger">@error('reason'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Availability <span>*</span></label>
                        <select name="availability">
                            <option selected>Select Availability</option>
                            <option value="Immediately">Immediately</option>
                            <option value="Within 1-2 weeks">Within 1-2 weeks</option>
                            <option value="1-3 months">1-3 months</option>
                            <option value="3-6 months">3-6 months</option>
                            <option value="6-9 months">6-9 months</option>
                            <option value="9-12 months">9-12 months</option>
                            <option value="12+ months">12+ months</option>
                        </select>
                        <span class="text-danger">@error('availability'){{ $message }} @enderror</span>
                    </div>
                </fieldset>
                <div class="card-footer text-right">
                    <a href="/referee"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/upload-docs"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection