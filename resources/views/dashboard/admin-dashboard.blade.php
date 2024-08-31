
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
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-street-view f-36 text-c-purple"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Positions</h6>
                                <h2 class="m-b-0">{{$positions}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user f-36 text-c-red"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Applicants</h6>
                                <h2 class="m-b-0">{{$applicants}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="feather icon-user-check f-36 text-c-green"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Accepted</h6>
                                <h2 class="m-b-0">{{$applicantsAccepted}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="feather icon-user-x f-36 text-c-red"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Declined</h6>
                                <h2 class="m-b-0">{{$applicantsRejected}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-people-carry f-36 text-c-yellow"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Jobs Posted</h6>
                                <h2 class="m-b-0">{{$jobPosted}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
    

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min1.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple1.js"></script>
    <script src="assets/js/pcoded.min1.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>

<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
{{-- <script src="assets/js/plugins/apexcharts.min.js"></script> --}}
<script>
    // report model start
    $('#modal-report').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('title')
        var modal = $(this)
        modal.find('.modal-title').text('Report of ' + recipient + ' on current month')
    })
    // report model end
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
    // [ operation-processed ] start
    $(function() {
        var options = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#4680ff"],
            fill: {
                type: 'solid',
                opacity: 0.3,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: "#4680ff",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Operation '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#operation-chart"), options);
        chart.render();
    });
    // [ operation-processed ] end
    // [ death-processed ] start
    $(function() {
        var options = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#9ccc65"],
            fill: {
                type: 'solid',
                opacity: 0.3,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: "#9ccc65",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89, 63, 25, 44, 12, 36, 25, 66, 41, 89]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Death '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#death-chart"), options);
        chart.render();
    });
    // [ death-processed ] end
    // [ Birth-processed ] start
    $(function() {
        var options = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#ff5252"],
            fill: {
                type: 'solid',
                opacity: 0.3,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: "#ff5252",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Birth '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#birth-chart"), options);
        chart.render();
    });
    // [ Birth-processed ] end
</script>


@endsection
