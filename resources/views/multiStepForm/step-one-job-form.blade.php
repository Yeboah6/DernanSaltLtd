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
    input[type="file"] {
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

            <form action="{{url('/apply/create-step-one')}}" method="POST">
                @csrf
<fieldset id="personal">
    <legend>Personal Information</legend>
    <div class="form-group">
        <label for="first-name">First Name <span>*</span></label>
        <input type="text" name="first_name" value="{{ $applicant -> first_name ?? '' }}" placeholder="Enter First Name" required>
        <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="middle-name">Middle Name <span></span></label>
        <input type="text" name="middle_name" value="{{ $applicant -> middle_name ?? '' }}" placeholder="Enter Middle Name">
        <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="last-name">Last Name <span>*</span></label>
        <input type="text" name="last_name" value="{{ $applicant -> last_name ?? '' }}" required placeholder="Enter Last Name">
        <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth <span>*</span></label>
        <input type="date" name="dob" value="{{ $applicant -> dob ?? '' }}" required placeholder="Enter Last Name">
        <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label>Gender <span>*</span></label>
        <label><input type="radio" name="gender" value="male"> Male</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
        <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="nationality">Nationality <span>*</span></label>
        <input type="text" name="nationality" value="{{ $applicant -> nationality ?? '' }}" required placeholder="Enter Nationality. Eg; Ghanaian">
        <span class="text-danger">@error('nationality'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Address <span>*</span></label>
        <input type="text" name="address" value="{{ $applicant -> address ?? '' }}" required placeholder="Enter Address">
        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Phone Number <span>*</span></label>
        <input type="text" name="number" value="{{ $applicant -> number ?? '' }}" required placeholder="Enter Phone Number">
        <span class="text-danger">@error('number'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="full-name">Email <span>*</span></label>
        <input type="email" name="email" value="{{ $applicant -> email ?? '' }}" required placeholder="Enter Email Eg; youremail@gmail.com">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
</fieldset>

<div class="card-footer text-right">
    <button type="submit" class="btn btn-primary">Next</button>
</div>
</form>
</div>
</div>
</div>

@endsection