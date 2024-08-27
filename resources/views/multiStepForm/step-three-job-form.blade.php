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
                <form action="{{url('/apply/create-step-three')}}" method="POST">
                    @csrf
                <fieldset>
                    <legend>Educational Background</legend>
                    <div class="form-group">
                        <label for="first-name">Institution Name <span>*</span></label>
                        <input type="text" name="institution_name" required value="{{ $applicant -> institution_name ?? '' }}" placeholder="Enter Name of Institution">
                        <span class="text-danger">@error('institution_name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="middle-name">Degree/Diploma Obtained <span>*</span></label>
                        <input type="text" name="certificate" required value="{{ $applicant -> certificate ?? '' }}" placeholder="Enter Degree/Diploma Obtained">
                        <span class="text-danger">@error('certificate'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Year Began <span>*</span></label>
                        <input type="month" name="year_began" required value="{{ $applicant -> year_began ?? '' }}" placeholder="Year Began">
                        <span class="text-danger">@error('year_began'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="dob">Year of Graduation <span>*</span></label>
                        <input type="month" name="year_of_graduation" required value="{{ $applicant -> year_of_graduation ?? '' }}" placeholder="Year of Graduation">
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
                        <label>Secondary Education <span>*</span></label>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="school_name">School Name <span>*</span></label>
                        <input type="text" name="school_name" required value="{{ $applicant -> school_name ?? '' }}" placeholder="Enter School Name Eg; West Africa Senior High School">
                        <span class="text-danger">@error('school_name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="full-name">Certificate Obtained <span>*</span></label>
                        <input type="text" name="secondary_certificate" required value="{{ $applicant -> secondary_certificate ?? '' }}" placeholder="Enter Certificate Eg;WASSCE">
                        <span class="text-danger">@error('secondary_certificate'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="full-name">Year of Completion <span>*</span></label>
                        <input type="month" name="year_of_completion" required value="{{ $applicant -> year_of_completion ?? '' }}" placeholder="">
                        <span class="text-danger">@error('year_of_completion'){{ $message }} @enderror</span>
                    </div>
                </fieldset>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <a href="{{ route('apply.create.step.two') }}" class="btn btn-danger pull-right">Previous</a>
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