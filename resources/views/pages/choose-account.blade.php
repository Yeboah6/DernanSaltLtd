@extends('layouts.main-layout')
@section('content')

    <style>
      
        .footer-text + *{
          font-size: 14px;
        }
        .footer-input{
          font-size: 14px;
          outline: 0;
          border: 0;
          background-color: #FFFFFF48;
          color: #D9DBE1;
        }
        .footer-input::placeholder{
          color: #FFFFFF7A;
        }
        /* .plane-icon{
          filter: invert(1);
        } */
        .footerInput-container{
          width: fit-content;
        }

        .button-container {
            margin-bottom: 50px;
            display:flex;
            margin: 20px;
        }

        .button-container .button {
            border: 1px solid #09395E;
            margin: 20px;
            width: 220px;
            height: 50px;
            text-align: center;
            padding: 10px;
            background-color: #09395E;
            border-radius: 5px;
        }

        .section-wrap {
            margin: 120px;
            margin-top: 150px;
        }

        .button-container .button a {
            color: #fff;
        }

    </style>

   
 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky" style="background-color: #51B3E4;">
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
                        {{-- <li class="scroll-to-section"><a wire:navigate href="/admin-login">Login</a></li> --}}

                        @if(Session::has('loginId'))
                        <li class="scroll-to-section"><a wire:navigate href="#" style="color: #fff;">{{ $data -> first_name }}</a></li>
                        <li><a href="applicant-logout"><i class="fa fa-right-from-bracket"></i></a></li>
                    @else
                        <li class="scroll-to-section"><a wire:navigate href="/admin-login" style="color: #fff;">Login</a></li>
                    @endif
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

  <!-- ***** Main Banner Area End ***** -->

<section class="top-section section-wrap" >
    <div class="container">
        <div class="row">
            <h1>Welcome to our Application Portal.</h1>
        
            <div class="col-lg-6">
                <br><br>
                <h6>If you need to <a href="/contact">contact us</a> regarding technical issues with application system, 
                    we may be reached during normal business hours.</h6>
            </div>

            <div class="col-lg-12 button-container">
                <div class="button">
                    <a href="/applicant-login">Log in</a>
                </div>

                <div class="button">
                    <a href="{{ url('/applicant-sign-up/'.$jobDesc -> id) }}">Create an account</a>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection