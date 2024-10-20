@extends('layouts.main-layout')
@section('content')
@include('includes.applicant-header')

<style>

    .applicant_id {
        position: absolute;
        left:450px;
        top:50px;
    }

@media screen and (max-width: 450px) {
    .applicant_id {
        position: relative;
        left:15px;
        top:0;
    }

    .applicant-image {
        margin-left: 50px;
    }

}

</style>

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Applicant Details</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Invoice ] start -->
            <div class="container" id="printTable">
                <div>
                    <div class="card">
                        <div class="row invoice-contact">
                            <div class="col-md-8">
                                <div class="invoice-box row">
                                    <div class="col-sm-12">
                                        <table class="table table-responsive invoice-table table-borderless p-l-20">
                                            <tbody>
                                                @foreach ($details as $details)
                                                    
                                                <button onclick="history.back()">Go Back</button>
                                                
                                                <tr>
                                                    <td><a href="/" class="b-brand">
                                                            <img class="" src="../assets/images/Asset4@4x.png" style="width:6.5em;" alt="Applicant Image">
                                                        </a>
                                                    </td>
                                                </tr>
                                                {{-- <tr></tr> --}}
                                                
                                                <tr>
                                                    {{-- <h6>Personl Information :</h6> --}}
                                                    <td>{{ $details -> first_name }} {{ $details -> middle_name }} {{ $details -> last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{$details -> address}}</td>
                                                </tr>
                                                <tr>
                                                    <td><a class="text-secondary" href="mailto:{{$details -> email}}" target="_top">{{$details -> email}} </a></td>
                                                </tr>
                                                <tr>
                                                    <td>{{$details -> number}} </td>
                                                </tr>
                                                <tr>
                                                    <td>{{$details -> nationality}} </td>
                                                </tr>
                                                <tr>
                                                    <td>{{$details -> dob}} </td>
                                                </tr>
                                                <tr>
                                                    <td>{{$details -> gender}} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="applicant_id">
                                    <h4 style="font-size:2rem">{{ $details -> applicant_id}}</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('../uploads/applicant-images/'.$details -> image) }}" alt="Applicant_image" style="border-radius:10px;width:50%;">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Work Experience :</h6>
                                    <h6 class="m-0">{{$details -> current_employer}}</h6>
                                    <p class="m-0 m-t-10">{{$details -> position_held}}</p>
                                    <p class="m-0">{{$details -> duration_of_employment_from}}</p>
                                    <p class="m-0">{{$details -> duration_of_employment_to}}</p>
                                    <p class="m-0">{{$details -> responsilibities}}</p>
                                </div>

                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Educational Background :</h6>
                                    <h6 class="m-0">{{$details -> institution_name}}</h6>
                                    <p class="m-0">{{$details -> certificate}}</p>
                                    <p class="m-0 m-t-10">{{$details -> year_began}}</p>
                                    <p class="m-0">{{$details -> year_of_graduation}}</p>
                                </div>

                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Referee :</h6>
                                    <h6 class="m-0">{{$details -> referee_name}}</h6>
                                    <p class="m-0 m-t-10">{{$details -> referee_company}}</p>
                                    <p class="m-0">{{$details -> referee_position}}</p>
                                    <p class="m-0">{{$details -> referee_number}}</p>
                                    <p class="m-0">{{$details -> referee_email}}</p>
                                </div>
                            </div>
{{-- <br><hr> --}}
                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Previous Work :</h6>
                                    <h6 class="m-0">{{$details -> current_employer2}}</h6>
                                    <p class="m-0 m-t-10">{{$details -> position_held2}}</p>
                                    <p class="m-0">{{$details -> duration_of_employment_from2}}</p>
                                    <p class="m-0">{{$details -> duration_of_employment_to2}}</p>
                                    <p class="m-0">{{$details -> responsilibities2}}</p>
                                </div>
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Educational Background :</h6>
                                    <h6 class="m-0">{{$details -> institution_name2}}</h6>
                                    <p class="m-0">{{$details -> certificate2}}</p>
                                    <p class="m-0 m-t-10">{{$details -> year_began2}}</p>
                                    <p class="m-0">{{$details -> year_of_graduation2}}</p>
                                </div>
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Other Referee :</h6>
                                    <h6 class="m-0">{{$details -> referee_name2}}</h6>
                                    <p class="m-0 m-t-10">{{$details -> referee_company2}}</p>
                                    <p class="m-0">{{$details -> referee_position2}}</p>
                                    <p class="m-0">{{$details -> referee_number2}}</p>
                                    <p class="m-0">{{$details -> referee_email2}}</p>
                                </div>
                            </div>

                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    {{-- <h6>Educational Background :</h6> --}}
                                </div>

                                {{-- @if ( -> institution_name3 === null) --}}
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Educational Background :</h6>
                                    <h6 class="m-0">{{$details -> institution_name3}}</h6>
                                    <p class="m-0">{{$details -> certificate3}}</p>
                                    <p class="m-0 m-t-10">{{$details -> year_began3}}</p>
                                    <p class="m-0">{{$details -> year_of_graduation3}}</p>
                                </div>

                                {{-- @endif --}}
                                
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    {{-- <h6>Educational Background :</h6> --}}
                                </div>

                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    {{-- <h6>Educational Background :</h6> --}}
                                </div>
                            </div>

                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    {{-- <h6>Educational Background :</h6> --}}
                                </div>
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Secondary School :</h6>
                                    <h6 class="m-0">{{$details -> school_name}}</h6>
                                    <p class="m-0">{{$details -> secondary_certificate}}</p>
                                    <p class="m-0">{{$details -> year_of_completion}}</p>
                                </div>

                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    {{-- <h6>Educational Background :</h6> --}}
                                </div>

                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    {{-- <h6>Educational Background :</h6> --}}
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table invoice-detail-table">
                                            <thead>
                                                <tr class="thead-default">
                                                    <th>Document Name</th>
                                                    <th>Document</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6>CV</h6>
                                                    </td>
                                                    <td><a class="btn waves-effect waves-light btn-primary m-b" href="{{ url('/download/'.$details -> cv)}}"><i class="feather icon-download"></i> </a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Certificates Acquired</h6>
                                                    </td>
                                                    <td><a class="btn waves-effect waves-light btn-primary m-b" href="{{ url('/download/'.$details -> cerificates_acquired)}}"><i class="feather icon-download"></i> </a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Cover Letter</h6>
                                                    </td>
                                                    <td><a class="btn waves-effect waves-light btn-primary m-b" href="{{ url('/download/'.$details -> cover_letter)}}"><i class="feather icon-download"></i> </a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Other Relevant Documents</h6>
                                                    </td>
                                                    <td><a class="btn waves-effect waves-light btn-primary m-b-10 " href="{{ url('/download/'.$details -> other_relevant_doc)}}"><i class="feather icon-download"></i> </a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-responsive invoice-table invoice-total">
                                        <tbody>
                                            <tr>
                                                <th>Skills and Certifications: </th>
                                                {{-- <br><hr> --}}
                                                <td>{{$details -> skills_certificate}}</td>
                                            </tr>
                                            <tr>
                                                <th>Why do you want to work at Dernan Salt Limited?: </th>
                                                {{-- <br><hr> --}}
                                                <td>{{$details -> reason}}</td>
                                            </tr>
                                            <tr>
                                                <th>Availability: </th>
                                                {{-- <br><hr> --}}
                                                <td>{{$details -> availability}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row col-md-8">
                                <div class="col-sm-12">
                                    <h6>Agreement and Declaration</h6>
                                    <p>{{$details -> agreement}}</p>
                                </div>
                                <div class="col-sm-12">
                                    <h6>Signature</h6>
                                    <p>{{$details -> signature}}</p>
                                </div>
                                <div class="col-sm-12">
                                    <h6>Date</h6>
                                    <p>{{$details -> date}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- [ Invoice ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/ripple.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
	<script src="../assets/js/menu-setting.min.js"></script>

@endsection

<style>

/* General page layout */
.pcoded-main-container {
    padding: 2rem 1.5rem;
    background-color: #f9f9f9;
    /* width: 2000px; */
}

.page-header-title h5 {
    font-size: 1.8rem;
    font-weight: bold;
}

/* .container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin-top: 1.5rem;
} */

/* Applicant image styling */
.applicant-image {
    margin-left: 50px;
    width: 120px;
    border-radius: 50%;
    border: 2px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.applicant_id h4 {
    font-size: 1.5rem;
    color: #333;
    font-weight: bold;
}

/* Card and content layout */
.card {
    padding: 1.5rem;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding-top: 2rem;
}

.invoice-client-info h6 {
    font-weight: bold;
    font-size: 1.2rem;
    margin-bottom: 0.8rem;
    color: #666;
}

.invoice-client-info p {
    font-size: 1rem;
    color: #333;
    margin-bottom: 0.5rem;
}

/* Table styling */
.invoice-table {
    width: 100%;
    margin-top: 2rem;
}

.invoice-table th, .invoice-table td {
    font-size: 1rem;
    padding: 0.5rem 1rem;
}

.invoice-table th {
    background-color: #f1f1f1;
    text-transform: uppercase;
}

.invoice-table td {
    background-color: #fff;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: white;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.table-responsive {
    margin-top: 2rem;
}

/* Spacing for agreement, signature, and other fields */
.row .col-sm-12 h6 {
    font-size: 1.1rem;
    font-weight: bold;
    margin-top: 1.5rem;
}

.row .col-sm-12 p {
    font-size: 1rem;
    color: #555;
}

/* Media queries for responsiveness */
@media screen and (max-width: 768px) {
    .applicant_id {
        position: relative;
        left: 0;
        top: 0;
        text-align: center;
    }

    .applicant-image {
        margin-left: 0;
        margin-bottom: 1rem;
    }

    .invoice-client-info {
        text-align: center;
    }
}

@media screen and (max-width: 450px) {
    .applicant_id {
        text-align: left;
        font-size: 1.2rem;
    }

    .applicant-image {
        width: 90px;
    }

    .card {
        padding: 1rem;
    }

    .card-body {
        padding-top: 1rem;
    }
}


</style>