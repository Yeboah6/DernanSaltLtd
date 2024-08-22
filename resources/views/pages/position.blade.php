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
                            <h5 class="m-b-10">Position</h5>
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
                                <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Position</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($position as $position)
                                        <tr>
                                        <td>{{ $position -> id }}</td>
                                        <td>{{ $position -> position }}</td>
                                        @if ($position -> status == "Available")
                                            <td><span style="background-color: #008B9C;color:#fff;padding:5px;border-radius:50px;font-size:12px;text-align:center">{{ $position -> status }}</span></td>
                                        @else
                                            <td><span style="background-color: #FF5252;color:#fff;padding:5px;border-radius:50px;font-size:12px;text-align:center">{{ $position -> status }}</span></td>
                                        @endif
                                        
                                        <td>
                                            {{-- <a href="#!" class="btn btn-info btn-sm" style="margin:10px;"><i class="feather icon-edit"></i>&nbsp;Edit </a> --}}
                                            {{-- <form action="{{url('/positions/'.$position->id)}}" method="post"> --}}
                                                {{-- @csrf --}}
                                                <a href="{{url('/positions/'.$position->id)}}" class="btn btn-danger btn-sm"><i class="feather icon-eye-off">&nbsp;Hide</i>&nbsp;</a>
                                                <a href="{{url('/positions-show/'.$position->id)}}" class="btn btn-primary btn-sm"><i class="feather icon-eye">&nbsp;Show</i>&nbsp;</a>
                                                {{-- <button type="submit" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Hide </button> --}}
                                            {{-- </form> --}}
                                        </td>
                                    </tr>
                                </tbody>
                                    @endforeach
                                    
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
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Position</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/positions') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Position</label>
                                <input type="text" class="form-control" name="position">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary" type="submit">Submit</button>
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
