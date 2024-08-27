@extends('layouts.main-layout')
@section('content')
@include('includes.header')

<style>

    body {
            font-family: Arial, sans-serif;
            background-color: #f1f3f4;
            margin: 0;
            padding: 0;
        }
        
        /* .container {
            width: 60%;
            margin: 20px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        } */
        
        .header {
            text-align: center;
            padding: 20px;
        }
        
        .logo {
            max-width: 100px;
            margin-bottom: 10px;
        }
        
        h1 {
            margin: 0;
            font-size: 24px;
            color: #005687;
        }
        
        .form-title {
            background-color: #51B3E4;
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin: 20px 0;
            text-align: center;
        }
        
        .account-info {
            background-color: #e7f0f8;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .account-info p {
            margin: 5px 0;
            font-size: 14px;
        }
        
        .info-text {
            color: #666;
        }
        
        .required-text {
            color: #d93025;
            font-size: 12px;
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
        input[type='month'] {
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
            /* border: 1px solid #005687; */
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
            padding: 10px;
            margin: 10px;
    
        }
        
        </style>

<div class="container">
  
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 offset-md-3">
            <form action="{{url('/apply/create-step-two')}}" method="POST">
                @csrf
<fieldset id="experience">
    <legend>Work Experience</legend>
    <div class="form-group">
        <label for="first-name">Current/Most Recent Employer <span>*</span></label>
        <input type="text" name="current_employer" value="{{ $applicant -> current_employer ?? '' }}" required placeholder="Enter Current/Most Recent Employer">
        <span class="text-danger">@error('current_employer'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label>Company Name <span>*</span></label>
        <input type="text" name="company_name" value="{{ $applicant -> company_name ?? '' }}" required placeholder="Enter Company Name">
        <span class="text-danger">@error('company_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label>Company Address <span>*</span></label>
        <input type="text" name="company_address" value="{{ $applicant -> company_address ?? '' }}" required placeholder="Enter Company Address">
        <span class="text-danger">@error('company_address'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="middle-name">Position Held <span>*</span></label>
        <input type="text" name="position_held" value="{{ $applicant -> position_held ?? '' }}" required placeholder="Enter Position Held">
        <span class="text-danger">@error('position_held'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="last-name">Duration of Employment (From - To) <span>*</span></label>
        <input type="month" name="duration_of_employment_from" value="{{ $applicant -> duration_of_employment_from ?? '' }}" required placeholder="Enter Duration of Employment (From)"> 
        <span class="text-danger">@error('duration_of_employment_from'){{ $message }} @enderror</span>
        <br><br>
        <input type="month" name="duration_of_employment_to" value="{{ $applicant -> duration_of_employment_to ?? '' }}" required placeholder="Enter Duration of Employment (To)">
        <span class="text-danger">@error('duration_of_employment_to'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="dob">Responsibilities <span>*</span></label>
        <textarea name="responsilibities" value="{{ $applicant -> responsilibities ?? '' }}" cols="70" rows="6"></textarea>
        <span class="text-danger">@error('responsilibities'){{ $message }} @enderror</span>
    </div>
    <br>
    <hr>
    <br>
    <div class="form-group">
        <label>Previous Employer <span>*</span></label>
        <input type="text" name="current_employer2" value="{{ $applicant -> current_employer2 ?? '' }}" required placeholder="Enter Previous Employer">
        <span class="text-danger">@error('current_employer2'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label>Company Name <span>*</span></label>
        <input type="text" name="company_name2" value="{{ $applicant -> company_name2 ?? '' }}" required placeholder="Enter Company Name">
        <span class="text-danger">@error('company_name2'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label>Company Address <span>*</span></label>
        <input type="text" name="company_address2" value="{{ $applicant -> company_address2 ?? '' }}" required placeholder="Enter Company Address">
        <span class="text-danger">@error('company_address2'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="nationality">Position Held <span>*</span></label>
        <input type="text" name="position_held2" value="{{ $applicant -> position_held2 ?? '' }}" required placeholder="Enter Position Held">
        <span class="text-danger">@error('position_held2'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Duration of Employment (From - To) <span>*</span></label>
        <input type="month" name="duration_of_employment_from2" value="{{ $applicant -> duration_of_employment_from2 ?? '' }}" required placeholder="Enter Duration of Employment (From)">
        <span class="text-danger">@error('duration_of_employment_from2'){{ $message }} @enderror</span>
        <br><br>
        <input type="month" name="duration_of_employment_to2" value="{{ $applicant -> duration_of_employment_to2 ?? '' }}" required placeholder="Enter Duration of Employment (To)">
        <span class="text-danger">@error('duration_of_employment_to2'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Responsibilities <span>*</span></label>
        <textarea name="responsilibities2" value="{{ $applicant -> responsilibities ?? '' }}" cols="70" rows="6" required></textarea>
        <span class="text-danger">@error('responsilibities2'){{ $message }} @enderror</span>
    </div>

        {{-- <input type="text" name="position" value="{{ $applicant -> position ?? '' }}">     --}}
</fieldset>

<div class="card-footer">
    <div class="row">
        <div class="col-md-6 text-left">
            <a href="{{ route('apply.create.step.one') }}" class="btn btn-danger pull-right">Previous</a>
        </div>
        <div class="col-md-6 text-right">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </div>
</div>
</form>

</div>
</div>
</div>

@endsection