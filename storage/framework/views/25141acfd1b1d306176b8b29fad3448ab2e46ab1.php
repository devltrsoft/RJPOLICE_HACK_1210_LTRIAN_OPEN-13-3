<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/rajasthan_police.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="<?php echo e(url('/login')); ?>" class="d-flex align-items-center w-auto">
                                    <img src="<?php echo e(asset('assets/img/rajasthan_police.png')); ?>" alt=""
                                        width="50px" height="50px"> &nbsp;
                                    <span class="d-none d-lg-block">
                                        <h3 style="color:#012970; font-family: 'Poppins', sans-serif;"> RajPolice</h3>
                                    </span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>



                                    <form class="row g-3 " action="<?php echo e(url('/login')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="batch_number" class="form-control"
                                                    id="yourUsername" required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="police_password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <span class="text-danger">
                                            <?php echo e(session('error') ?? ''); ?>

                                        </span>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Don't have account? <a href=""
                                                    data-bs-toggle="modal" data-bs-target="#roleModel">Create an
                                                    account</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                Designed by <a href="https://ltr-soft.com/">Ltr-Soft</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <div class="modal fade" id="roleModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Choose Role</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <br><br>
                        <div class="row gy-4 justify-content-center">
                            <!-- First Card -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-bs-toggle="modal" data-bs-target="#StationInchargeModel"
                                    style="cursor: pointer;
                             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #ddd; border-radius: 8px;">
                                    <div class="card-body text-center">
                                        <i class="bi bi-people-fill fs-1"></i><br>
                                        Stat. Incharge

                                    </div>
                                </div>
                            </div>

                            <!-- Second Card -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-bs-toggle="modal" data-bs-target="#PoliceModel"
                                    style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #ddd; border-radius: 8px;">
                                    <div class="card-body text-center">
                                        <i class="bi bi-p-circle-fill fs-1"></i><br>
                                        Police

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Row (Centered) -->
                        <div class="row gy-4 justify-content-center">

                            <!-- Third Card -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-bs-toggle="modal" data-bs-target="#UserModel"
                                    style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #ddd; border-radius: 8px;">
                                    <div class="card-body text-center">
                                        <i class="bi bi-person fs-1"></i><br>
                                        User

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="modal fade" id="UserModel" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">User registration</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form action="<?php echo e(url('/index')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <div class="form-group" style="display: inline-block; margin-right: 10px;">
                                        <label for="complaint_against">First Name</label>
                                        <input type="text" class="form-control" name="police_fname">
                                    </div>

                                    <div class="form-group" style="display: inline-block; margin-right: 10px;">
                                        <label for="complaint_against">Last Name</label>
                                        <input type="text" class="form-control" name="police_mname">
                                    </div>


                                </div>


                                <div class="form-group">
                                    <label for="complaint_against">Email </label>
                                    <input type="email" class="form-control" name="police_email">
                                </div>

                                <div class="form-group">
                                    <label for="police_password">Password</label>
                                    <input type="password" class="form-control" name="police_password">
                                </div>


                                <div class="form-group">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="police_gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                                    class="bx bx-save"></i> Save complaint suspect</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>



            
            <div class="modal fade" id="PoliceModel" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Police registration</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form action="<?php echo e(url('/policeindex')); ?>" method="post">
                                <?php echo csrf_field(); ?>


                                <div>
                                    <div class="form-group" style="display: inline-block; margin-right: 10px;">
                                        <label for="complaint_against">First Name</label>
                                        <input type="text" class="form-control" name="police_fname">
                                    </div>

                                    <div class="form-group" style="display: inline-block; margin-right: 10px;">
                                        <label for="complaint_against">Last Name</label>
                                        <input type="text" class="form-control" name="police_mname">
                                    </div>


                                </div>
                                <div class="form-group">
                                    <label for="complaint_against">batch_number</label>
                                    <input type="text" class="form-control" name="batch_number">
                                </div>

                                



                                <div class="form-group">
                                    <label for="complaint_against">Email</label>
                                    <input type="email" class="form-control" name="police_email">
                                </div>

                                <div class="form-group">
                                    <label for="police_password">Password</label>
                                    <input type="password" class="form-control" name="police_password">
                                </div>


                                <div class="form-group">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="police_gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>


                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                                    class="bx bx-save"></i> Save complaint suspect</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>


            
            <div class="modal fade" id="StationInchargeModel" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Station Incharge</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>


                        <div class="modal-body">
                            <form action="<?php echo e(url('/stationinchargerindex')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <div class="form-group" style="display: inline-block; margin-right: 10px;">
                                        <label for="complaint_against">First Name</label>
                                        <input type="text" class="form-control" name="police_fname">
                                    </div>

                                    <div class="form-group" style="display: inline-block; margin-right: 10px;">
                                        <label for="complaint_against">Last Name</label>
                                        <input type="text" class="form-control" name="police_mname">
                                    </div>


                                </div>


                                <div class="form-group">
                                    <label for="complaint_against">batch_number</label>
                                    <input type="text" class="form-control" name="batch_number">
                                </div>

                                


                                <div class="form-group">
                                    <label for="complaint_against">police_email</label>
                                    <input type="email" class="form-control" name="police_email">
                                </div>

                                <div class="form-group">
                                    <label for="police_password">Police Password</label>
                                    <input type="password" class="form-control" name="police_password">
                                </div>


                                <div class="form-group">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="police_gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>


                                

                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                                    class="bx bx-save"></i> Save complaint suspect</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main><!-- End #main -->

    

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
<?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Login.blade.php ENDPATH**/ ?>