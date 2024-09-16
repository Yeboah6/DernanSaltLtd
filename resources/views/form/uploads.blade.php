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
    <li class="fieldset">Referee</li>
    <li class="fieldset">Other Relevant</li>
    <li class="fieldset" style="background-color: #51B3E4;color:#fff;">Document Uploads</li>
    <li class="fieldset agree">Agreement and Declaration</li>
</ul>

<div class="container">
  
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6 offset-md-3">
            <h2 class="form-title" style="margin-top: 50px">Job Application Form</h2>

            <form action="{{url('/upload-docs')}}" method="POST" enctype="multipart/form-data">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif

                @csrf

                <div class="card-footer text-right">
                    <a href="/other-relevant"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/agreement"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
                <fieldset>
                    <legend>Document Uploads</legend>
                    {{-- @foreach ($personal_id as $id) --}}
                        <input type="text" name="personal_id" hidden value="{{$personal_id}}">
                    {{-- @endforeach --}}
                    
                    <div class="form-group">
                        <label for="first-name">Upload your Image <span>*</span></label>
                        <input type="file" name="image">
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
                </fieldset>
                <div class="card-footer text-right">
                    <a href="/other-relevant"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/agreement"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection