@extends('frontend.layouts.main');
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/index') }}">Home</a></li>
                    <li class="breadcrumb-item active"> {{ GoogleTranslate::trans('Dashboard', \App::getLocale()) }}</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">  {{ GoogleTranslate::trans('FIR', \App::getLocale()) }}</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-layout-text-window-reverse"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $complaintscomplate ?? '0' }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">  {{ GoogleTranslate::trans('Complaints', \App::getLocale()) }}</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-bookmark-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $complaintspending ?? '0' }}</h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ GoogleTranslate::trans('Total complaint', \App::getLocale()) }}</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalcomplaint ?? '0' }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ GoogleTranslate::trans('Assigned Cases', \App::getLocale()) }}</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journals"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalAssignedCases ?? '0' }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="col-xxl-6 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ GoogleTranslate::trans('Not Assigned Cases', \App::getLocale()) }}</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-x"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $notAssignedCases ?? '0' }}</h6>
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
                                    <h5 class="card-title"> {{ GoogleTranslate::trans('Reports', \App::getLocale()) }} </h5>

                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'FIR',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Complaint',
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



                        <div class="card-body pb-0">


                            <h5 class="card-title">                       
                                {{ GoogleTranslate::trans('News & Updates', \App::getLocale()) }}
                                </h5>
                            @foreach ($data as $item)
                                <div class="news">
                                    <div class="post-item clearfix">
                                        @if ($item->news_photo_path)
                                            <img src="{{ is_array($item->news_photo_path) && count($item->news_photo_path) > 0 ? asset('police_api/inputfiles/' . $item->news_photo_path[0]) : '' }}"
                                                alt="">
                                        @else
                                            <img src="assets/img/rajasthan_police.png" alt="">
                                        @endif


                                        <h4><a href="#">{{ $item->news_title }}</a></h4>
                                        <p>
                                            {{ GoogleTranslate::trans( $item->news_description , \App::getLocale()) }}
                                        </p>
                                    </div><br>



                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            {{-- <!DOCTYPE html>
            <html>
            <head>
                <title>BotMan Widget</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                    html,
                    body {
                        background-color: #fff;
                        color: #636b6f;
                        font-family: 'Times New Roman', Times, serif;
                        font-weight: 200;
                        height: 100vh;
                        margin: 0;
                        background-image: unset !important;
                    }
                </style>
            </head>
            <body>
                <link rel="stylesheet" type="text/css"
                    href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
                <script>
                    var botmanWidget = {
                        aboutText: "Hello user",
                        introMessage: 'Hi, I am abuhurera karpude', // Fix: Replace '=' with ':'
                    };
                </script>
                <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
            </body>
            </html> --}}



        </section>
    </main><!-- End #main -->
@endsection
