@extends('layouts.main-layout')
@section('content')

    <style>

        .job-card {
          display: flex;
          justify-content: center
        }

        a .job-card-body  {
          border: 1px solid #51B3E4;
          border-radius: 10px;
          margin: 20px;
          padding: 50px;
          color: #fff;
          background-color: #51B3E4;
        }

        a .job-card-body:hover {
          background-color: #85c6e7;
          color: #000;
        }

        </style>


  @include('includes.header')

  <!-- ***** Main Banner Area Start ***** -->

  <div class="page-heading job-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Jobs</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->



  <section class="about-us" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h4>Available Positions</h4>
          </div>
        </div>

        @foreach ($jobPosting as $position)
        <div class="jobs-container">
          <div class="job-card">
            <a href="{{ url('/job-description/'.$position -> id)}}"> 
              <div class="job-card-body">
                <h1>Hello</h1>
              </div>
            </a>
          @endforeach
          {{-- <div class="job-card">
            <a href="">
              <div class="job-card-body">
                <h1>Hello</h1>
              </div>
            </a>
            <a href="">
              <div class="job-card-body">
                <h1>Hello</h1>
              </div>
            </a>
            <a href="">
              <div class="job-card-body">
                <h1>Hello</h1>
              </div>
            </a>
          </div> --}}
        </div>

        {{-- <div>
          <div class="myowl-carousel owl-carousel" style="position: relative; z-index: 5;">
            @foreach ($jobPosting as $position)
              <div class="item">
              <div class="gallery position-relative">
                <a href="{{ url('/job-description/'.$position -> id) }}">
                  <img src="assets/images/HR MANAGER.png" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc position-absolute bottom-0 start-0 end-0 d-flex justify-content-between align-items-center">
                  <p class="text-white">{{$position -> position}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div> --}}
          
      </div>
    </div>
  </section>  

  @endsection