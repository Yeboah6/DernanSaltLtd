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
        width: 240px;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        color: #000000;
        font-weight: bold;
    }

    .fieldset-containter {
        position: absolute;
        left: 50px;
        top: 130px;
    }
</style>

<ul class="fieldset-containter">
    <a href="/personal-info"><li class="fieldset">Personal Information</li></a>
    <a href="/work-experience"><li class="fieldset">Work Experience</li></a>
    <a href="/education"><li class="fieldset">Educational Background</li></a>
    <a href="/referee"><li class="fieldset">Referee</li></a>
    <a href="/other-relevant"><li class="fieldset">Other Relevant</li></a>
    <a href="/upload-docs"><li class="fieldset" style="background-color: #51B3E4;color:#fff;">Document Uploads</li></a>
    <a href="/agreement"><li class="fieldset agree">Agreement and Declaration</li></a>

    <ul>
        <a href="preview-application"><li class="fieldset">Preview Application</li></a>
    </ul>
</ul>

<div class="container">
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6 offset-md-3">
            <h2 class="form-title" style="margin-top: 50px">Job Application Form</h2>

            <form action="{{url('/update-upload-docs')}}" method="POST" enctype="multipart/form-data">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif

                @csrf

                <div class="footer text-right">
                    <a href="/other-relevant"><button type="button" class="btn btn-danger">Back</button></a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/agreement"><button type="button" class="btn btn-primary">Next</button></a>
                </div>
<br>
                <fieldset>
                    <legend>Document Uploads</legend>
                    
                    <!-- Hidden personal_id -->
                    <input type="text" name="personal_id" hidden value="{{ $doc->personal_id }}">
                    
                    <!-- Image Upload -->
                    <div class="form-group">
                        <label for="image">Upload your Image <span>*</span></label>
                        <input type="file" name="image">
                        <br><br>
                        @if($doc && $doc->image)
                            <!-- Show the preview of the uploaded image -->
                            <img src="{{ asset('uploads/applicant-images/' . $doc->image) }}" style="width:40%"  alt="Applicant Image">
                        @endif
                        
                        <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                    </div>

                    <!-- CV Upload -->
                    <div class="form-group">
                        <label for="cv">Upload your CV <span>*</span></label>
                        <input type="file" name="cv">
                        
                        @if($doc && $doc->cv)
                            <!-- Preview CV file if exists (view link or embedded if PDF) -->
                            <a href="{{ asset('uploads/applicant-documents/' . $doc->cv) }}" target="_blank">View Uploaded CV</a>
                        @endif
                        
                        <span class="text-danger">@error('cv'){{ $message }} @enderror</span>
                    </div>

                    <!-- Certificates Upload -->
                    <div class="form-group">
                        <label for="certificates_acquired">Upload your Certificates</label>
                        <input type="file" name="cerificates_acquired">
                        
                        @if($doc && $doc->cerificates_acquired)
                            <a href="{{ asset('uploads/applicant-documents/' . $doc->cerificates_acquired) }}" target="_blank">View Uploaded Certificates</a>
                        @endif
                        
                        <span class="text-danger">@error('cerificates_acquired'){{ $message }} @enderror</span>
                    </div>

                    <!-- Cover Letter Upload -->
                    <div class="form-group">
                        <label for="cover_letter">Upload your Cover Letter <span>*</span></label>
                        <input type="file" name="cover_letter">
                        
                        @if($doc && $doc->cover_letter)
                            <a href="{{ asset('uploads/applicant-documents/' . $doc->cover_letter) }}" target="_blank">View Uploaded Cover Letter</a>
                        @endif
                        
                        <span class="text-danger">@error('cover_letter'){{ $message }} @enderror</span>
                    </div>

                    <!-- Other Relevant Documents Upload -->
                    <div class="form-group">
                        <label for="other_relevant_doc">Upload any other relevant documents</label>
                        <input type="file" name="other_relevant_doc">
                        
                        @if($doc && $doc->other_relevant_doc)
                            <a href="{{ asset('uploads/applicant-documents/' . $doc->other_relevant_doc) }}" target="_blank">View Uploaded Documents</a>
                        @endif
                        
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
