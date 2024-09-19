@extends('layouts.adminLayout')

@section('content')

@include('includes.sidenav')
@include('includes.adminHeader')

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
                                                <tr>
                                                    <td><a href="index.html" class="b-brand">
                                                            <img class="img-fluid" src="../assets/images/Asset4@4x.png" style="width:6.5em;" alt="Dernan Salt Logo">
                                                        </a>
                                                    </td>
                                                </tr>
                                                {{-- <tr></tr> --}}
                                                
                                                <tr>
                                                    {{-- <h6>Personl Information :</h6> --}}
                                                    <td>{{$applicants -> first_name}} {{$applicants -> middle_name}} {{$applicants -> last_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicants -> address}} </td>
                                                </tr>
                                                <tr>
                                                    <td><a class="text-secondary" href="mailto:{{$applicants -> email}} " target="_top">{{$applicants -> email}} </a></td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicants -> number}} </td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicants -> nationality}} </td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicants -> dob}} </td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicants -> gender}} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="card-body">
                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Work Experience :</h6>
                                    <h6 class="m-0">{{$applicants -> current_employer}}</h6>
                                    <p class="m-0 m-t-10">{{$applicants -> position_held}}</p>
                                    <p class="m-0">{{$applicants -> duration_of_employment}}</p>
                                    <p class="m-0">{{$applicants -> responsilibities}}</p>
                                </div>

                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Educational Background :</h6>
                                    <h6 class="m-0">{{$applicants -> institution_name}}</h6>
                                    <p class="m-0 m-t-10">{{$applicants -> highest_qualification}}</p>
                                    <p class="m-0">{{$applicants -> certificate}}</p>
                                    <p class="m-0">{{$applicants -> year_of_graduation}}</p>
                                    {{-- <p class="m-0">{{$position -> id -> posi}}</p> --}}
                                </div>

                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Referee :</h6>
                                    <h6 class="m-0">{{$applicants -> referee_name}}</h6>
                                    <p class="m-0 m-t-10">{{$applicants -> referee_company}}</p>
                                    <p class="m-0">{{$applicants -> referee_position}}</p>
                                    <p class="m-0">{{$applicants -> referee_number}}</p>
                                    <p class="m-0">{{$applicants -> referee_email}}</p>
                                </div>
                            </div>
{{-- <br><hr> --}}
                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Previous Work :</h6>
                                    <h6 class="m-0">{{$applicants -> current_employer2}}</h6>
                                    <p class="m-0 m-t-10">{{$applicants -> position_held2}}</p>
                                    <p class="m-0">{{$applicants -> duration_of_employment2}}</p>
                                    <p class="m-0">{{$applicants -> responsilibities2}}</p>
                                </div>
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Secondary School :</h6>
                                    <h6 class="m-0">{{$applicants -> school_name}}</h6>
                                    <p class="m-0">{{$applicants -> secondary_certificate}}</p>
                                    <p class="m-0">{{$applicants -> year_of_completion}}</p>
                                </div>
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Other Referee :</h6>
                                    <h6 class="m-0">{{$applicants -> referee_name2}}</h6>
                                    <p class="m-0 m-t-10">{{$applicants -> referee_company2}}</p>
                                    <p class="m-0">{{$applicants -> referee_position2}}</p>
                                    <p class="m-0">{{$applicants -> referee_number2}}</p>
                                    <p class="m-0">{{$applicants -> referee_email2}}</p>
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
                                                    {{-- <td><a href="{!! route('download', $applicants -> cv) !!}">Download</a></td> --}}
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Certificates Acquired</h6>
                                                    </td>
                                                    {{-- <td><a href="{{ url('/download/'.$applicants -> cerificates_acquired)}}">Download</a></td> --}}
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Cover Letter</h6>
                                                    </td>
                                                    {{-- <td><a href="{{ url('/download/'.$applicants -> cover_letter)}}">Download</a></td> --}}
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Other Relevant Documents</h6>
                                                    </td>
                                                    {{-- <td><a href="{{ url('/download/'.$applicants -> other_relevant_doc)}}">Download</a></td> --}}
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
                                                <th>Skills and Certifications :</th>
                                                <td>{{$applicants -> skills_certificate}}</td>
                                            </tr>
                                            <tr>
                                                <th>Why do you want to work at Dernan Salt Limited? :</th>
                                                <td>{{$applicants -> reason}}</td>
                                            </tr>
                                            <tr>
                                                <th>Availability :</th>
                                                <td>{{$applicants -> availability}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row col-md-8">
                                <div class="col-sm-12">
                                    <h6>Agreement and Declaration :</h6>
                                    <p> {{$applicants -> agreement}} </p>
                                </div>
                                <div class="col-sm-12">
                                    <h6>Signature :</h6>
                                    <p> {{$applicants -> signature}}
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <h6>Date :</h6>
                                    <p> {{$applicants -> date}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 invoice-btn-group text-center">
                            <button type="button" class="btn waves-effect waves-light btn-primary btn-print-invoice m-b-10">Print</button>
                            <a href="{{url('/accept-send/mail/'.$applicants -> id)}}" class="btn waves-effect waves-light btn-success m-b-10">Accepted</a>
                            <a href="{{url('/reject-send/mail/'.$applicants -> id)}}" type="button" class="btn waves-effect waves-light btn-danger m-b-10 ">Rejected</a>
                        </div>
                    </div>
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

<script>
    function printData() {
        var divToPrint = document.getElementById("printTable");
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }
    $('.btn-print-invoice').on('click', function() {
        printData();
    })
</script>


@endsection
