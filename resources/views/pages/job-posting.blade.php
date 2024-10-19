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
                            <h5 class="m-b-10">Job Posting</h5>
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
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Jobs</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Job Title</th>
                                        <th width="50%">Description</th>
                                        <th>Position</th>
                                        <th>Deadline</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobPosting as $posting)
                                        <tr>
                                        <td>
                                            {{$posting -> id}}
                                        </td>
                                        <td>{{$posting -> job_title}}</td>
                                        <td>{{ Str::limit($posting -> job_description, 105) }}</td>
                                        <td>
                                            @foreach ($positionNames as $positionName)
                                                @if ($positionName -> id == $posting -> position_id)
                                                    {{ $positionName -> position }}
                                                @endif
                                            @endforeach
                                        </td>
                                        {{-- {{$posting -> position_id}} --}}
                                        <td>{{$posting -> deadline}}</td>
                                        @if ($posting -> status == "Available")
                                            <td style="text-align: center"><span style="background-color: #008B9C;color:#fff;padding:5px;border-radius:50px;font-size:12px;text-align:center">{{$posting -> status}}</span></td>
                                        @else
                                            <td style="text-align: center"><span style="background-color: #FF5252;color:#fff;padding:5px;border-radius:50px;font-size:12px;text-align:center">{{$posting -> status}}</span></td>
                                        @endif

                                        <td>
                                            <a href="{{ url('/job-posted/'.$posting -> id)}}" class="btn btn-primary btn-sm"><i class="feather icon-eye"></i></a>
                                            <a href="{{url('/job-posting/'.$posting -> id)}}" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report2"><i class="feather icon-edit"></i>&nbsp; </a>
                                            @if ($posting -> status == "Available")
                                                <a href="{{url('/job-posting/'.$posting -> id)}}" class="btn btn-danger btn-sm"><i class="feather icon-eye-off"></i>&nbsp;</a>
                                            @else
                                                <a href="{{url('/job-posting-show/'.$posting -> id)}}" class="btn btn-danger btn-sm"><i class="feather icon-eye"></i>&nbsp;</a>
                                            @endif

                                        </td>
                                    </tr>
                                    @endforeach

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

{{-- <div class="modal fade" id="modal-report2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Icon</label>
                                <input type="file" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Description">Description</label>
                                <textarea class="form-control" id="Description" rows="3"></textarea>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-danger">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}


<div class="modal fade" id="modal-report2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Job Posting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/job-posting/'.$posting -> id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label">Job Title</label>
                                <input type="text" class="form-control" name="job_title" value="{{$posting -> job_title}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Job Type</label>
                                <select class="form-control" name="job_type" value="{{$posting -> job_type}}">
                                    <option value=""></option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label">Job Description</label>
                                <textarea class="form-control" name="job_description" rows="3" value="{{$posting -> job_description}}"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label">Education</label>
                                <input type="text" class="form-control" name="education" value="{{$posting -> education}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Experience</label>
                                <input type="text" class="form-control" name="experience" value="{{$posting -> experience}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label">Personal Attributes</label>
                                <textarea class="form-control" name="personal_attributes" rows="3" value="">{{$posting -> personal_attributes}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Position</label>
                                <select class="form-control" name="position">
                                    <option value=""></option>
                                    @foreach ($position as $position)
                                         {{-- <option value="{{$position -> position}}">{{$position -> position}}</option> --}}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Skills and Competencies</label>
                                <input type="text" class="form-control" name="skills_competencies" value="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label">Deadline</label>
                                <input type="text" class="form-control" name="deadline" value="{{$posting -> deadline}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Job Posting -->
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Job Posting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/job-posting') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label">Job Title</label>
                                <input type="text" class="form-control" name="job_title">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Permanent</label>
                                <select class="form-control" name="job_type">
                                    <option value=""></option>
                                    <option value="Contract">Contract</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label">Job Description</label>
                                <textarea class="form-control" name="job_description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label">Education</label>
                                <input type="text" class="form-control" name="education">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Experience</label>
                                <input type="text" class="form-control" name="experience">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label">Personal Attributes</label>
                                <textarea class="form-control" name="personal_attributes" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Position</label>
                                <select class="form-control" name="position">
                                    <option value=""></option>
                                    @foreach ($position as $position)
                                         {{-- <option value="{{$position -> position}}">{{$position -> position}}</option> --}}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Skills and Competencies</label>
                                <input type="text" class="form-control" name="skills_competencies">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label">Deadline</label>
                                <input type="text" class="form-control" name="deadline">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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