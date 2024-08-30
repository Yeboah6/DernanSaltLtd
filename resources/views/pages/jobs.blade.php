@extends('layouts.main-layout')
@section('content')

    <style>

        .job-card {
          display: flex;
          
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

        /* .job-card-body h1 {
          display: block;
        } */

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

        <style>
          .jobs-container {
              display: flex;
              flex-wrap: wrap;
              gap: 16px; /* Space between job cards */
              justify-content: space-around; /* Adjust spacing between items */
              padding: 10px; /* Padding around the container */
          }
      
          .job-card {
              flex: 1 1 calc(25% - 16px); /* Adjust card size for 4 per row with spacing */
              box-sizing: border-box; /* Include padding and border in the element's total width and height */
              background-color: #f8f9fa;
              border: 1px solid #ddd; 
              border-radius: 8px; /* Rounded corners */
              transition: transform 0.2s ease; /* Smooth hover effect */
              max-width: 300px; /* Optional: limit the width of each card */
              margin-bottom: 16px; /* Space at the bottom of each card */
              justify-content: center;
          }
      
          .job-card:hover {
              transform: scale(1.05); /* Slightly enlarge on hover */
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a shadow on hover */
          }
      
          .job-card-body {
              padding: 16px; /* Space inside the job card */
          }
      
          .job-card h1 {
              font-size: 1.2rem; /* Adjust font size */
              margin: 0; /* Remove default margin */
              color: #fff;
          }
      
          /* Responsive Adjustments */
          @media (max-width: 992px) {
              .job-card {
                  flex: 1 1 calc(33.333% - 16px); /* 3 cards per row on medium screens */
              }
          }
      
          @media (max-width: 768px) {
              .job-card {
                  flex: 1 1 calc(50% - 16px); /* 2 cards per row on small screens */
              }
          }
      
          @media (max-width: 576px) {
              .job-card {
                  flex: 1 1 100%; /* 1 card per row on extra small screens */
              }
          }
      </style>
      
      <div class="jobs-container">
          @foreach ($jobPosting as $position)
          <div class="job-card">
              <a href="{{ url('/job-description/'.$position->id)}}">
                  <div class="job-card-body">
                      <h1>
                          @foreach ($positionNames as $positionName)
                            @if ($positionName->id == $position->position_id)
                              {{ $positionName->position }}
                            @endif
                          @endforeach
                      </h1>
                  </div>
              </a>
          </div>
          @endforeach
      </div>
      </div>
    </div>
  </section>  

  @endsection