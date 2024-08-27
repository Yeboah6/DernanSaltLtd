@extends('layouts.main-layout')
@section('content')
@include('includes.header')

@livewireStyles
    
<div class="container">
  
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 offset-md-3">
            <livewire:job-application>
        </div>
    </div>
</div>

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

@livewireScripts

@endsection