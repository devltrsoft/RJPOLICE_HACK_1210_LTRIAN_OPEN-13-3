<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rajasthan Police</title>
    <meta content="" name="description">
    <meta content="" name="keywords">F

    <!-- Favicons -->
    <link href="<?php echo e(url('assets/img/rajasthan_police.png')); ?>" rel="icon">
    <link href="<?php echo e(url('assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(url('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">

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
            <a href="<?php echo e(url('/index')); ?>" class="d-flex align-items-center">
                <img src="<?php echo e(asset('assets/img/rajasthan_police.png')); ?>" alt="" width="40px" height="40px">
                &nbsp;
                <span class="d-none d-lg-block">
                    <h4 style="color:#012970; font-family: 'Poppins', sans-serif;"><?php echo e(GoogleTranslate::trans( 'RajPolice', \App::getLocale())); ?></h4>
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


                
                

                <li class="nav-item dropdown pe-3">
                    <?php
                        $policeNames = session('police_fname');
                        $police_fname1 = $policeNames[0] ?? '';
                        $police_lname = $policeNames[1] ?? '';
                    ?>
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="<?php echo e(asset('assets/img/profile-img.jpg')); ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            
                            <?php echo e(GoogleTranslate::trans('Abuhurera', \App::getLocale())); ?>

                        </span>

                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6> <?php echo e($police_fname1); ?> <?php echo e($police_lname); ?></h6>
                            <span> <?php echo e(session()->get('position_name')); ?></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo e(url('/userprofile')); ?>">
                                <i class="bi bi-person"></i>
                                <span> <?php echo e(GoogleTranslate::trans('My Profile', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo e(url('/userprofile')); ?>">
                                <i class="bi bi-gear"></i>
                                <span><?php echo e(GoogleTranslate::trans('Account Settings', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo e(url('/register')); ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span><?php echo e(GoogleTranslate::trans('Sign Out', \App::getLocale())); ?></span>

                            </a>
                        </li>


                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">




        <?php
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
        ?>

        <?php if($user): ?>
            <!-- Content for 'user' role -->
        <?php elseif($police): ?>
            <!-- Content for 'police' role -->
        <?php elseif($stationincharge): ?>
            <!-- Content for 'stationincharge' role -->
        <?php endif; ?>



        <?php if($user): ?>
            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('/index')); ?>">
                        <i class="bi bi-grid"></i>
                        <span><?php echo e(GoogleTranslate::trans('Dashboard', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Dashboard Nav -->



                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span><?php echo e(GoogleTranslate::trans(' FIR ', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/CompletedFIR')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Completed FIR', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/PendingFIR')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Pending FIR', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/addcomplaint')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Add Complaint', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-card-checklist"></i><span><?php echo e(GoogleTranslate::trans('Allocated Cases', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/AssignComplaint')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Assigned cases', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/NotAssign')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('not Assigned cases', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Icons Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#case-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-journals"></i><span><?php echo e(GoogleTranslate::trans('Complaint', \App::getLocale())); ?></span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="case-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/TotalCompalint')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('All Complaint', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/casesuspect')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Suspect', \App::getLocale())); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('/casewitness')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Witness', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/casesvictim')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Victim', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/casesevidance')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Evidance', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/notification')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Notification', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/news')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('News', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/feedback')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Feedback', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->


            </ul>
        <?php elseif($police): ?>
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('/policeindex')); ?>">
                        <i class="bi bi-grid"></i>
                        <span><?php echo e(GoogleTranslate::trans('Dashboard', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span><?php echo e(GoogleTranslate::trans('FIR', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/policefircomplate')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Completed FIR', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/policefirpending')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Pending FIR', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#crimi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span><?php echo e(GoogleTranslate::trans('Add Complaint', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="crimi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/policeaddcomplaint')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Add Complaint', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/policeadduser')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Add User', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/policeassigncomplaint')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Allocated Complaint', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->

                

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#invi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-search"></i><span><?php echo e(GoogleTranslate::trans('Investigation', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="invi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/policeinvestigation')); ?>">
                                <i class="bi bi-circle"></i><span> <?php echo e(GoogleTranslate::trans('Invistigation Cases', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="<?php echo e(url('/policeinvestigationsuspect')); ?>">
                                <i class="bi bi-circle"></i><span>  <?php echo e(GoogleTranslate::trans('Suspect', \App::getLocale())); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('/policeinvestigationwitness')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Witness', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/policeinvestigationvictim')); ?>">
                                <i class="bi bi-circle"></i><span> <?php echo e(GoogleTranslate::trans('Victim', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/policeinvestigationevidance')); ?>">
                                <i class="bi bi-circle"></i><span> <?php echo e(GoogleTranslate::trans('Evidance', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->


                

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/policecriminal')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Criminal', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/policenotification')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Notification', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->

                

                
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/policenews')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('News', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->



                

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/policewarrent')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Warrent', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/policetodolist')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Todo List', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/policefeedback')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Feedbak', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->


            </ul>

        <?php elseif($stationincharge): ?>
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('/stationindex')); ?>">
                        <i class="bi bi-grid"></i>
                        <span><?php echo e(GoogleTranslate::trans('Dashboard', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span><?php echo e(GoogleTranslate::trans('FIR', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/stationCompletedFIR')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Completed FIR', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationPendingFIR')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Pending FIR', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/stationaddcomplaint')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Add Complaint', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Register Page Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-card-checklist"></i><span><?php echo e(GoogleTranslate::trans('Allocated Cases', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/stationAssignComplaint')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Allocated cases', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationNotAssign')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Deallocated cases', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Icons Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#case-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-journals"></i><span><?php echo e(GoogleTranslate::trans('All Complaint', \App::getLocale())); ?></span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="case-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/stationTotalCompalint')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('All Complaint', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationcasesuspect')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Suspect', \App::getLocale())); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('/stationcasewitness')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Witness', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationcasesvictim')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Victim', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationcasesevidance')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Evidance', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#invi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-search"></i><span><?php echo e(GoogleTranslate::trans('Investigation', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="invi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/stationinvestigation')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('All Investigation  Cases', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationinvestisuspect')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Suspect', \App::getLocale())); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('/stationinvestiwitness')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Witness', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationinvestigationvictim')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Victim', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationinvestigationevidance')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Evidance', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#crimi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span><?php echo e(GoogleTranslate::trans('Warrent', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="crimi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/stationwarrent')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Warrent', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationcriminalcases')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Create Warrent', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#crimi-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span><?php echo e(GoogleTranslate::trans('Criminals', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="crimi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/stationcriminal')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Criminal Detail', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationcriminalcases')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Criminal Cases', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#news-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-newspaper"></i><span><?php echo e(GoogleTranslate::trans('News', \App::getLocale())); ?></span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="news-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/stationNews')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('News', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationNewsphoto')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('News Photo', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#not-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-person-x-fill"></i><span><?php echo e(GoogleTranslate::trans('Notification', \App::getLocale())); ?></span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="not-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/stationnotification')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Create Notification', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationnotificationphoto')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Add Notification Photo', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#case-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-journals"></i><span><?php echo e(GoogleTranslate::trans('Report', \App::getLocale())); ?></span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="case-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/stationComplaintreport')); ?>">
                                <i class="bi bi-circle"></i><span> <?php echo e(GoogleTranslate::trans('Complaint', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationfirreport')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('FIR', \App::getLocale())); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('/stationinvestigationrreport')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('Investigation', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationcriminalreport')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('criminal', \App::getLocale())); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/stationfeedbackreport')); ?>">
                                <i class="bi bi-circle"></i><span><?php echo e(GoogleTranslate::trans('FeedBack', \App::getLocale())); ?></span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/stationdutyallocate')); ?>">
                        <i class="bi bi-person"></i>
                        <span><?php echo e(GoogleTranslate::trans('Allocate Duty', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/stationduty')); ?>">
                        <i class="bi bi-person"></i>
                        <span><?php echo e(GoogleTranslate::trans('Police', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/stationuser')); ?>">
                        <i class="bi bi-person"></i>
                        <span><?php echo e(GoogleTranslate::trans('Police', \App::getLocale())); ?></span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/stationtodolist')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Todo List', \App::getLocale())); ?></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/stationFeedback')); ?>">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo e(GoogleTranslate::trans('Feedbak', \App::getLocale())); ?></span>
                    </a>
                </li>

            </ul>
        <?php endif; ?>




    </aside><!-- End Sidebar-->
<?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/layouts/header.blade.php ENDPATH**/ ?>