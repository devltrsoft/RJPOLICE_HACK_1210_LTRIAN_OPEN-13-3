<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rajasthan Police</title>
    <meta content="" name="description">
    <meta content="" name="keywords">F

    <!-- Favicons -->
    <link href="{{ url('assets/img/rajasthan_police.png') }}" rel="icon">
    <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/index') }}" class="d-flex align-items-center">
                <img src="{{ asset('assets/img/rajasthan_police.png') }}" alt="" width="40px" height="40px">
                &nbsp;
                <span class="d-none d-lg-block">
                    <h4 style="color:#012970; font-family: 'Poppins', sans-serif;">{{ GoogleTranslate::trans( 'RajPolice', \App::getLocale()) }}</h4>
                </span>
            </a>


            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->
{{-- 
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">{{ GoogleTranslate::trans( 'View All', \App::getLocale()) }}</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">{{ GoogleTranslate::trans( 'Show all notifications', \App::getLocale()) }}</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items --> --}}

                {{-- </li><!-- End Notification Nav -->
                <li class="nav-item dropdown">
                    <div class="row">
                      
                        <div class="col-md-12">
                            <select class="form-select changeLanguage">
                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>{{ GoogleTranslate::trans( 'Hindi', \App::getLocale()) }}</option>
                            </select>
                        </div>
                    </div>
                </li> --}}
                

                <li class="nav-item dropdown pe-3">
                    @php
                        $policeNames = session('police_fname');
                        $police_fname1 = $policeNames[0] ?? '';
                        $police_lname = $policeNames[1] ?? '';
                    @endphp
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            {{-- {{ session()->get('police_fname') }}
                            {{ $police_fname1 }} {{ $police_lname }} --}}
                            {{ GoogleTranslate::trans('Abuhurera', \App::getLocale()) }}
                        </span>

                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6> {{ $police_fname1 }} {{ $police_lname }}</h6>
                            <span> {{ session()->get('position_name') }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/userprofile') }}">
                                <i class="bi bi-person"></i>
                                <span> {{ GoogleTranslate::trans('My Profile', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/userprofile') }}">
                                <i class="bi bi-gear"></i>
                                <span>{{ GoogleTranslate::trans('Account Settings', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/register') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>{{ GoogleTranslate::trans('Sign Out', \App::getLocale()) }}</span>

                            </a>
                        </li>


                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">




        @php
            $user = session()->get('user');
            $police = session()->get('police');
            $stationincharge = session()->get('stationincharge');

            if ($user == 'user') {
                // Clear roles other than 'user'
                session()->forget('police');
                session()->forget('stationincharge');
            } elseif ($police) {
                // Clear roles other than 'police'
                session()->forget('user');
                session()->forget('stationincharge');
            } elseif ($stationincharge) {
                // Clear roles other than 'stationincharge'
                session()->forget('user');
                session()->forget('police');
            }
        @endphp

        @if ($user)
            <!-- Content for 'user' role -->
        @elseif ($police)
            <!-- Content for 'police' role -->
        @elseif ($stationincharge)
            <!-- Content for 'stationincharge' role -->
        @endif



        @if ($user)
            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/index') }}">
                        <i class="bi bi-grid"></i>
                        <span>{{ GoogleTranslate::trans('Dashboard', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Dashboard Nav -->



                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>{{ GoogleTranslate::trans(' FIR ', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/CompletedFIR') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Completed FIR', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/PendingFIR') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Pending FIR', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/addcomplaint') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Add Complaint', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-card-checklist"></i><span>{{ GoogleTranslate::trans('Allocated Cases', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/AssignComplaint') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Assigned cases', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/NotAssign') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('not Assigned cases', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Icons Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#case-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-journals"></i><span>{{ GoogleTranslate::trans('Complaint', \App::getLocale()) }}</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="case-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/TotalCompalint') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('All Complaint', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/casesuspect') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Suspect', \App::getLocale()) }}</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/casewitness') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Witness', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/casesvictim') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Victim', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/casesevidance') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Evidance', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/notification') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Notification', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/news') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('News', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/feedback') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Feedback', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->


            </ul>
        @elseif ($police)
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/policeindex') }}">
                        <i class="bi bi-grid"></i>
                        <span>{{ GoogleTranslate::trans('Dashboard', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>{{ GoogleTranslate::trans('FIR', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/policefircomplate') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Completed FIR', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/policefirpending') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Pending FIR', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#crimi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span>{{ GoogleTranslate::trans('Add Complaint', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="crimi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/policeaddcomplaint') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Add Complaint', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/policeadduser') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Add User', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/policeassigncomplaint') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Allocated Complaint', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->

                {{-- <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#case-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-journals"></i><span>Cases</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="case-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/TotalCompalint') }}">
                                <i class="bi bi-circle"></i><span>All Cases</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/casesuspect') }}">
                                <i class="bi bi-circle"></i><span>Suspect</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/casewitness') }}">
                                <i class="bi bi-circle"></i><span>Witness</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/casesvictim') }}">
                                <i class="bi bi-circle"></i><span>Victim</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/casesevidance') }}">
                                <i class="bi bi-circle"></i><span>Evidance</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav --> --}}

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#invi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-search"></i><span>{{ GoogleTranslate::trans('Investigation', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="invi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/policeinvestigation') }}">
                                <i class="bi bi-circle"></i><span> {{ GoogleTranslate::trans('Invistigation Cases', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="{{ url('/policeinvestigationsuspect') }}">
                                <i class="bi bi-circle"></i><span>  {{ GoogleTranslate::trans('Suspect', \App::getLocale()) }}</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/policeinvestigationwitness') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Witness', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/policeinvestigationvictim') }}">
                                <i class="bi bi-circle"></i><span> {{ GoogleTranslate::trans('Victim', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/policeinvestigationevidance') }}">
                                <i class="bi bi-circle"></i><span> {{ GoogleTranslate::trans('Evidance', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->


                {{-- <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#crimi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span>Criminals</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="crimi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/policecriminal') }}">
                                <i class="bi bi-circle"></i><span>Criminal Detail</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/policecriminalcases') }}">
                                <i class="bi bi-circle"></i><span>Criminal Cases</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/policecriminal') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Criminal', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/policenotification') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Notification', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->

                {{-- <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#not-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span>Notification</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="not-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/policenotification') }}">
                                <i class="bi bi-circle"></i><span>Create Notification</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/policenotificationphoto') }}">
                                <i class="bi bi-circle"></i><span>Add Notification Photo</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/policenews') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('News', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->



                {{-- <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#news-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-newspaper"></i><span>News</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="news-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/policeNews') }}">
                                <i class="bi bi-circle"></i><span>News</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/policeNewsphoto') }}">
                                <i class="bi bi-circle"></i><span>News Photo</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/policewarrent') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Warrent', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/policetodolist') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Todo List', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/policefeedback') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Feedbak', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->


            </ul>

        @elseif ($stationincharge)
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/stationindex') }}">
                        <i class="bi bi-grid"></i>
                        <span>{{ GoogleTranslate::trans('Dashboard', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>{{ GoogleTranslate::trans('FIR', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/stationCompletedFIR') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Completed FIR', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationPendingFIR') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Pending FIR', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/stationaddcomplaint') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Add Complaint', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Register Page Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-card-checklist"></i><span>{{ GoogleTranslate::trans('Allocated Cases', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/stationAssignComplaint') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Allocated cases', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationNotAssign') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Deallocated cases', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Icons Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#case-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-journals"></i><span>{{ GoogleTranslate::trans('All Complaint', \App::getLocale()) }}</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="case-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/stationTotalCompalint') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('All Complaint', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationcasesuspect') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Suspect', \App::getLocale()) }}</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/stationcasewitness') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Witness', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationcasesvictim') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Victim', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationcasesevidance') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Evidance', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#invi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-search"></i><span>{{ GoogleTranslate::trans('Investigation', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="invi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/stationinvestigation') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('All Investigation  Cases', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationinvestisuspect') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Suspect', \App::getLocale()) }}</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/stationinvestiwitness') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Witness', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationinvestigationvictim') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Victim', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationinvestigationevidance') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Evidance', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#crimi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span>{{ GoogleTranslate::trans('Warrent', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="crimi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/stationwarrent') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Warrent', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationcriminalcases') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Create Warrent', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#crimi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span>{{ GoogleTranslate::trans('Criminals', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="crimi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/stationcriminal') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Criminal Detail', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationcriminalcases') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Criminal Cases', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#news-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-newspaper"></i><span>{{ GoogleTranslate::trans('News', \App::getLocale()) }}</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="news-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/stationNews') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('News', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationNewsphoto') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('News Photo', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#not-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span>{{ GoogleTranslate::trans('Notification', \App::getLocale()) }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="not-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/stationnotification') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Create Notification', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationnotificationphoto') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Add Notification Photo', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#case-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-journals"></i><span>{{ GoogleTranslate::trans('Report', \App::getLocale()) }}</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="case-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/stationComplaintreport') }}">
                                <i class="bi bi-circle"></i><span> {{ GoogleTranslate::trans('Complaint', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationfirreport') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('FIR', \App::getLocale()) }}</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/stationinvestigationrreport') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('Investigation', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationcriminalreport') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('criminal', \App::getLocale()) }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/stationfeedbackreport') }}">
                                <i class="bi bi-circle"></i><span>{{ GoogleTranslate::trans('FeedBack', \App::getLocale()) }}</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/stationdutyallocate') }}">
                        <i class="bi bi-person"></i>
                        <span>{{ GoogleTranslate::trans('Allocate Duty', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/stationduty') }}">
                        <i class="bi bi-person"></i>
                        <span>{{ GoogleTranslate::trans('Police', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/stationuser') }}">
                        <i class="bi bi-person"></i>
                        <span>{{ GoogleTranslate::trans('Police', \App::getLocale()) }}</span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/stationtodolist') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Todo List', \App::getLocale()) }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/stationFeedback') }}">
                        <i class="bi bi-envelope"></i>
                        <span>{{ GoogleTranslate::trans('Feedbak', \App::getLocale()) }}</span>
                    </a>
                </li>

            </ul>
        @endif




    </aside><!-- End Sidebar-->
