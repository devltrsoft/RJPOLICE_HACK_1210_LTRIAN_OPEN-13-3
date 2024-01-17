@extends('frontend.layouts.main');
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">





                        <div class="col-xxl-6 col-xl-6">

                            <div class="card info-card customers-card">


                                <div class="card-body">
                                    <h5 class="card-title">Assigned Cases</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $allocatecase }}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card sales-card">



                                <div class="card-body">
                                    <h5 class="card-title">Investigation Cases</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journals"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $InvistigationCases }}</h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Reports </h5>

                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'complated',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'pending',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Total',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 550,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                                        "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                                        "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                                        "2018-09-19T06:30:00.000Z"
                                                    ]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4">
                    <div class="card">


                        <div class="card-body">
                            <h5 class="card-title">To Do List &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button
                                    class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#assignModel"><i class="bi bi-plus-lg"></i> Add</button></h5>

                            <div class="activity">
                                @foreach ($todolist as $item)
                                    <div class="activity-item d-flex">
                                        <div class="activite-label">{{ $loop->iteration }}</div>
                                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                        <div class="activity-content">
                                            {{ $item->task_name }}
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <div class="card">
                       
                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp;</h5>

                                @foreach ($data as $item)

                                <div class="news">
                                    <div class="post-item clearfix">
                                        @if ($item->news_photo_path)
                                        <img src="{{ is_array($item->news_photo_path) && count($item->news_photo_path) > 0 ? asset('police_api/inputfiles/' . $item->news_photo_path[0]) : '' }}" alt="">
                                    @else
                                    <img src="assets/img/rajasthan_police.png" 
                                    alt="">
                                    @endif
                                    
    
                                        <h4><a href="#">{{ $item->news_title }}</a></h4>
                                        <p>{{ $item->news_description }}
                                        </p>
                                    </div><br>
    
                                    
    
                                </div>
                                @endforeach
                        </div>
                    </div>

                </div>
            </div>

           



            <div class="modal fade" id="assignModel" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Assign Complaints</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label">Complaint Id</label>
                                    <input type="text" class="form-control" name="complaint_id">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Assign To</label>
                                    <select class="form-select" id="country" name="police_id">
                                        <option value="">option1</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" name="save_assigned_complaint"><i
                                    class="bx bx-save"></i> Save changes</button>
                        </div>
                    </div>
                </div>
            </div>






        </section>
    </main><!-- End #main -->
@endsection
