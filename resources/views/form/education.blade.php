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
    <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Educational Background</li>
    <li class="fieldset">Referee</li>
    <li class="fieldset">Other Relevant</li>
    <li class="fieldset">Document Uploads</li>
    <li class="fieldset agree">Agreement and Declaration</li>
</ul>

<div class="container">
  
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6 offset-md-3">
            <h2 class="form-title" style="margin-top: 50px">Job Application Form</h2>

            <form action="{{url('/education')}}" method="POST">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif

                @csrf

                <div class="card-footer text-right">
                    <a href="/work-experience"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/referee"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
                {{-- Educational Background SECTION 3 --}}
                <fieldset>
                   <legend>Educational Background</legend>
                   {{-- @foreach ($personal_id as $id) --}}
                       <input type="text" name="personal_id" hidden value="{{$personal_id}}">
                   {{-- @endforeach --}}
                   
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
                       <input type="text" name="institution_name3" placeholder="Enter Name of Institution">
                       <span class="text-danger">@error('institution_name3'){{ $message }} @enderror</span>
                   </div>
                   <div class="form-group">
                       <label for="middle-name">Degree/Diploma Obtained <span></span></label>
                       <input type="text" name="certificate3" placeholder="Enter Degree/Diploma Obtained">
                       <span class="text-danger">@error('certificate3'){{ $message }} @enderror</span>
                   </div>
                   <div class="form-group">
                       <label for="last-name">Year Began <span></span></label>
                       <input type="month" name="year_began3" placeholder="Year Began">
                       <span class="text-danger">@error('year_began3'){{ $message }} @enderror</span>
                   </div>
                   <div class="form-group">
                       <label for="dob">Year of Graduation <span></span></label>
                       <input type="month" name="year_of_graduation3" placeholder="Year of Graduation">
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
                </fieldset>
                <div class="card-footer text-right">
                    <a href="/work-experience"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/referee"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection