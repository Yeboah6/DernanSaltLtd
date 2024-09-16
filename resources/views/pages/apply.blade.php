@extends('layouts.main-layout')
@section('content')
 
 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav" role="navigation">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="../assets/images/Asset4@4x.png" style="width:4.5em" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a wire:navigate href="/">Home</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/about-us">About</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/jobs">job</a></li>
                        <li><a wire:navigate href="/contact">Contact</a></li> 
                        <li class="scroll-to-section"><a wire:navigate href="/marketing">Marketing</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/sales">Sales</a></li>

                        {{-- @if (Session::has('loginId'))
                            <li class="scroll-to-section" style="background-color: #09395e;color: #fff;border-radius: 5px;margin-left:10px;padding-left:20px"><a wire:navigate href="/applicant-login">Logout</a></li>
                        @else
                            <li class="scroll-to-section" style="background-color: #09395e;color: #fff;border-radius: 5px;"><a wire:navigate href="/admin-login">Login</a></li>
                        @endif --}}

                        <li class="scroll-to-section"><a href="">{{ $data -> first_name}}</a></li>
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>



<!-- ***** Header Area End ***** -->

@livewireStyles
    
<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 offset-md-3">
            <livewire:job-application :data="$data"/>
        </div>
    </div>
</div>

<style>

    /* body {
        font-family: Arial, sans-serif;
        background-color: #f1f3f4;
        margin: 0;
        padding: 0;
    } */
    
    /* .header {
        text-align: center;
        padding: 20px;
    } */
    
    /* .logo {
        max-width: 100px;
        margin-bottom: 10px;
    } */
    
    /* h1 {
        margin: 0;
        font-size: 24px;
        color: #005687;
    } */
    
    /* 
    
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
    } */
    
    /* .required-text {
        color: #d93025;
        font-size: 12px;
    }
 */
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
        position: relative;
        /* left: 50px; */
        /* padding: 10px; */
        /* margin: 10px; */

    }

    @media screen and (max-width: 450px) {

        /* legend {
        font-size: 18px;
        color: white;
        background-color: #51B3E4;
        padding: 10px;
        border-radius: 4px;
        } */

        /* .fieldset-containter {
            position: absolute;
            left: 10px;
            padding: 10px;
            margin: 10px;
        } */
        /* fieldset {
            padding: 10px;
            border: 0;
        } */

        /* input[type="text"],
        input[type="date"], 
        input[type="email"],
        input[type="file"],
        input[type='month'],
        textarea,
        select {
            width: calc(50% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        } */

        /* .form-title {
            background-color: #51B3E4;
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin: 20px 0;
            text-align: center;
        } */
    }
    
    </style>

@livewireScripts

@endsection