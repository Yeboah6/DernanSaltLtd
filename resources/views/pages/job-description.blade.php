@extends('layouts.main-layout')
@section('content')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card-main {
            border: none;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 120px;
            margin-bottom: 60px;
        }

        .card-header {
            background-color: #e9ecef;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-header span {
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .card-header span::before {
            content: "📣";
            margin-right: 10px;
        }

        .card-body h6 {
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .card-body hr {
            margin: 10px 0;
        }

        .list-group-item {
            border: none;
            padding-left: 0;
            padding-right: 0;
        }

        .list-group-item a {
            color: #0d6efd;
            text-decoration: none;
        }

        .list-group-item a:hover {
            text-decoration: underline;
        }

        .btn-checkin {
            background-color: #0d6efd;
            color: white;
            font-weight: 500;
            border-radius: 4px;
            padding: 6px 16px;
            text-align: center;
        }

        .btn-checkin:hover {
            background-color: #0b5ed7;
        }
    </style>
    
  @include('includes.header')

    <div class="container">
        <div class="card-main">
            <div class="card-header">
                <span>Job Details</span>
                <a href="{{ url('/job-apply/'.$jobDesc -> id) }}" class="btn-checkin">Apply</a>
            </div>
            <div class="card-body">
                <h6>Job Title</h6>
                <hr>
                <p>{{$jobDesc -> job_title}}</p>
                
                <h6>Permanent</h6>
                <hr>
                <p>{{$jobDesc -> job_type}}</p>
                
                <!-- Overview Section -->
                <h6>Job Description</h6>
                <hr>
                <p>{{$jobDesc -> job_description}}</p>

                <!-- What we need Section -->
                <h6>Key Responsibilities</h6>
                <hr>
                <p>{{$jobDesc -> key_responsibilities}}</p>

                <!-- Qualifications Section -->
                <h6>Qualifications</h6>
                <hr>
                <p>{{$jobDesc -> education}}</p>

                <h6>Experience</h6>
                <hr>
                <p>{{$jobDesc -> experience}}</p>

                <h6>Skills and Competencies</h6>
                <hr>
                <p>{{$jobDesc -> skills_competencies}}</p>

                <h6>Personal Attributes</h6>
                <hr>
                <p>{{$jobDesc -> personal_attributes}}</p>
            
                <h6>Deadline</h6>
                <hr>
                <p>{{$jobDesc -> deadline}}</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection