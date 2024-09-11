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
                                                    <td>{{$applicant -> first_name}} {{$applicant -> middle_name}} {{$applicant -> last_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicant -> address}} </td>
                                                </tr>
                                                <tr>
                                                    <td><a class="text-secondary" href="mailto:{{$applicant -> email}} " target="_top">{{$applicant -> email}} </a></td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicant -> number}} </td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicant -> nationality}} </td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicant -> dob}} </td>
                                                </tr>
                                                <tr>
                                                    <td>{{$applicant -> gender}} </td>
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
                                    {{-- <h6 class="m-0">{{$applicant2 -> current_employer}}</h6> --}}
                                    {{-- <p class="m-0 m-t-10">{{$applicant2 -> position_held}}</p> --}}
                                    {{-- <p class="m-0">{{$applicant2 -> duration_of_employment}}</p> --}}
                                    {{-- <p class="m-0">{{$applicant2 -> responsilibities}}</p> --}}
                                </div>

                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Educational Background :</h6>
                                    <h6 class="m-0">{{$applicant -> institution_name}}</h6>
                                    <p class="m-0 m-t-10">{{$applicant -> highest_qualification}}</p>
                                    <p class="m-0">{{$applicant -> certificate}}</p>
                                    <p class="m-0">{{$applicant -> year_of_graduation}}</p>
                                    {{-- <p class="m-0">{{$position -> id -> posi}}</p> --}}
                                </div>

                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Referee :</h6>
                                    <h6 class="m-0">{{$applicant -> referee_name}}</h6>
                                    <p class="m-0 m-t-10">{{$applicant -> referee_company}}</p>
                                    <p class="m-0">{{$applicant -> referee_position}}</p>
                                    <p class="m-0">{{$applicant -> referee_number}}</p>
                                    <p class="m-0">{{$applicant -> referee_email}}</p>
                                </div>
                            </div>
{{-- <br><hr> --}}
                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Previous Work :</h6>
                                    <h6 class="m-0">{{$applicant -> current_employer2}}</h6>
                                    <p class="m-0 m-t-10">{{$applicant -> position_held2}}</p>
                                    <p class="m-0">{{$applicant -> duration_of_employment2}}</p>
                                    <p class="m-0">{{$applicant -> responsilibities2}}</p>
                                </div>
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Secondary School :</h6>
                                    <h6 class="m-0">{{$applicant -> school_name}}</h6>
                                    <p class="m-0">{{$applicant -> secondary_certificate}}</p>
                                    <p class="m-0">{{$applicant -> year_of_completion}}</p>
                                </div>
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Other Referee :</h6>
                                    <h6 class="m-0">{{$applicant -> referee_name2}}</h6>
                                    <p class="m-0 m-t-10">{{$applicant -> referee_company2}}</p>
                                    <p class="m-0">{{$applicant -> referee_position2}}</p>
                                    <p class="m-0">{{$applicant -> referee_number2}}</p>
                                    <p class="m-0">{{$applicant -> referee_email2}}</p>
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
                                                    {{-- <td><a href="{!! route('download', $applicant -> cv) !!}">Download</a></td> --}}
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Certificates Acquired</h6>
                                                    </td>
                                                    {{-- <td><a href="{{ url('/download/'.$applicant -> cerificates_acquired)}}">Download</a></td> --}}
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Cover Letter</h6>
                                                    </td>
                                                    {{-- <td><a href="{{ url('/download/'.$applicant -> cover_letter)}}">Download</a></td> --}}
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Other Relevant Documents</h6>
                                                    </td>
                                                    {{-- <td><a href="{{ url('/download/'.$applicant -> other_relevant_doc)}}">Download</a></td> --}}
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
                                                <td>{{$applicant -> skills_certificate}}</td>
                                            </tr>
                                            <tr>
                                                <th>Why do you want to work at Dernan Salt Limited? :</th>
                                                <td>{{$applicant -> reason}}</td>
                                            </tr>
                                            <tr>
                                                <th>Availability :</th>
                                                <td>{{$applicant -> availability}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row col-md-8">
                                <div class="col-sm-12">
                                    <h6>Agreement and Declaration :</h6>
                                    <p> {{$applicant -> agreement}} </p>
                                </div>
                                <div class="col-sm-12">
                                    <h6>Signature :</h6>
                                    <p> {{$applicant -> signature}}
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <h6>Date :</h6>
                                    <p> {{$applicant -> date}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 invoice-btn-group text-center">
                            <button type="button" class="btn waves-effect waves-light btn-primary btn-print-invoice m-b-10">Print</button>
                            <a href="{{url('/accept-send/mail/'.$applicant -> id)}}" class="btn waves-effect waves-light btn-success m-b-10">Accepted</a>
                            <a href="{{url('/reject-send/mail/'.$applicant -> id)}}" type="button" class="btn waves-effect waves-light btn-danger m-b-10 ">Rejected</a>
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
