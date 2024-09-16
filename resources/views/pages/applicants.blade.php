@extends('layouts.adminLayout')
@section('content')
	 @include('includes.sidenav')
	
     @include('includes.adminHeader')
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Applicants</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Position Held</th>
                                        <th>Position</th>
                                        {{-- <th>Position Held</th> --}}
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($applicantStepOne as $applicant) --}}
                                    {{-- @foreach ($applicantStepTwo as $stepTwo) --}}
                                    {{-- @foreach ($applicantStepSeven as $stepSeven) --}}
                                    {{-- @foreach ($position as $position) --}}
                                        
                                        <tr>
                                        <td>{{ $applicant -> applicant_id}}</td>
                                        <td><img src="{{ asset('storage/app/applicants_images/'.$applicant -> image) }}" alt=""></td>
                                        <td>{{ $applicant -> first_name}} {{ $applicant -> middle_name}} {{ $applicant -> last_name}}</td>
                                        <td>{{ $applicant -> email}}</td>
                                        <td>{{ $applicant -> number}}</td>
                                        {{-- @if ($applicant -> applicant_id == $stepTwo -> applicant_id) --}}
                                            <td>{{ $applicant -> position_held}}</td>
                                        {{-- @endif --}}

                                        {{-- @if ($applicant -> applicant_id == $stepTwo -> applicant_id) --}}
                                        {{-- @if ($position -> id == $stepTwo -> position) --}}
                                             <td>{{ $applicant -> position}}</td>
                                        {{-- @endif --}}
                                           
                                        {{-- @endif --}}
                                        
                                        {{-- @if ($applicant -> applicant_id == $stepSeven -> applicant_id) --}}
                                            <td>{{ $applicant -> status}}</td>

                                        {{-- @endif --}}
                                        {{-- @if ($stepSeven -> status == "Submitted")
                                            <td style="text-align: center"><span style="background-color: #008B9C;color:#fff;padding:5px;border-radius:50px;font-size:12px;text-align:center">{{ $applicant -> status}}</span></td>
                                        
                                        @elseif ($stepSeven -> status == "Accepted")
                                            <td style="text-align: center"><span style="background-color: #0b6e31;color:#fff;padding:5px;border-radius:50px;font-size:12px;text-align:center">{{ $applicant -> status}}</span></td>
                                        @else
                                            <td style="text-align: center"><span style="background-color: #FF5252;color:#fff;padding:5px;border-radius:50px;font-size:12px;text-align:center">{{ $applicant -> status}}</span></td>
                                        @endif --}}
                                        
                                        <td>
                                            {{-- <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a> --}}
                                            <a href="{{url('/applicants/'.$applicant -> applicant_id)}}" class="btn btn-info btn-sm"><i class="feather icon-eye"></i>&nbsp;View </a>
                                            {{-- <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a> --}}
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}
                                    {{-- @endforeach --}}
                                    {{-- @endforeach --}}
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>

<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>



@endsection

