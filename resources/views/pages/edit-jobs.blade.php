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

<div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Job Posting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/job-posting-edit/'.$postingEdit -> id) }}" method="POST">
                    @csrf

                    <input type="text" name="position_id" value="{{ $postingEdit -> id}}" hidden>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label">Job Title</label>
                                <input type="text" class="form-control" name="job_title" value="{{$postingEdit -> job_title}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Permanent</label>
                                <select class="form-control" name="job_type">
                                    <option value="{{$postingEdit -> job_type}}">{{$postingEdit -> job_type}}</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label">Job Description</label>
                                <textarea class="form-control" name="job_description" rows="3">{{$postingEdit -> job_description}}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label">Education</label>
                                <input type="text" class="form-control" name="education" value="{{$postingEdit -> education}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Experience</label>
                                <input type="text" class="form-control" name="experience" value="{{$postingEdit -> experience}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label">Personal Attributes</label>
                                <textarea class="form-control" name="personal_attributes" rows="3">{{$postingEdit -> personal_attributes}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Position</label>
                                <select class="form-control" name="position">
                                    <option value="{{$postingEdit -> position_id}}">{{$postingEdit -> position_id}}</option>
                                    @foreach ($position as $position)
                                    <option value="{{$position -> id}}">{{$position -> position}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label">Skills and Competencies</label>
                                <input type="text" class="form-control" name="skills_competencies" value="{{$postingEdit -> skills_competencies}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label">Deadline</label>
                                <input type="text" class="form-control" name="deadline" value="{{$postingEdit -> deadline}}">
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
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/ripple.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
	<script src="../assets/js/menu-setting.min.js"></script>

<script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="../assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="../assets/js/plugins/apexcharts.min.js"></script>
<script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>


@endsection