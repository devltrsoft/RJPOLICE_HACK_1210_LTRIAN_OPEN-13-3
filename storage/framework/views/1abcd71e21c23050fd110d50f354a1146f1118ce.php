;
<?php $__env->startSection('main-container'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <div class="searchview search-bar d-flex align-items-center">
                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>
                </div>

            </nav>
        </div><!-- End Page Title -->
        

        <div class="container">
            <section class="section dashboard">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    

                    <div class="dropdown">
                        <button class="btn btn-primary" type="button" id="customActionDropdown" data-bs-toggle="modal"
                            data-bs-target="#addmodel">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                        
                    </div>

                    <div class="row">
                        <?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaintitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $complaintitem->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $item->suspect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suspect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card sales-card" data-bs-toggle="modal"
                                            data-bs-target="#fullscreenShowModal<?php echo e($item->investigation_witness_id); ?>">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo e($item->fir_id); ?></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-journal-bookmark-fill"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h4><?php echo e(GoogleTranslate::trans($suspect->investigation_witness_fname . ' ' . $suspect->investigation_witness_lname, \App::getLocale())); ?>

                                                        </h4>

                                                        

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="modal fade" id="fullscreenShowModal<?php echo e($item->investigation_witness_id); ?>"
                                        tabindex="-1">
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Show Complaint</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary"> <i
                                                            class="bx bxs-download"></i> Download</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
            </section>
        </div>
    </main>


    <div class="modal fade" id="addModel" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Investigation Witness</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(url('/investiwitness')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                            <label for="complaint_id">complaint no</label>
                            <select class="form-select" name="fir_idS" required>
                                <?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($dataItem->fir_id); ?>"><?php echo e($dataItem->fir_id); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control"  name="investigation_witness_fname" required>
                        </div>
                       <div class="form-group">
                            <label for="mname" class="form-label">Middle Name</label>
                            <input type="text" class="form-control"  name="investigation_witness_mname" required>
                        </div>
                        <div class="form-group">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="investigation_witness_lname" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="investigation_witness_address" required>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="investigation_witness_dob" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="investigation_witness_gender" >
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobile" name="investigation_witness_mobile_no" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="investigation_witness_email" required>
                        </div>
                        <div class="form-group">
                            <label for="photoPath" class="form-label">Photo Path</label>
                            <input type="file" class="form-control" id="photoPath" name="investigation_witness_photo" required>
                        </div>

                        <div class="form-group">
                            <label for="suspect_adhar" class="form-label">witness_adhar</label>
                            <input type="text" class="form-control" id="address" name="investigation_witness__adhar" required>
                        </div>
                        <div class="form-group">
                            <label for="suspect_pan_no" class="form-label">witness_pan_no</label>
                            <input type="text" class="form-control" id="dob" name="investigation_witness__pan_no" required>
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country_id">
                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countryItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($countryItem->country_id); ?>"><?php echo e($countryItem->country_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state" name="state_id">
                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statesItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($statesItem->state_id); ?>"><?php echo e($statesItem->state_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district" class="form-label">District</label>
                            <select class="form-select" id="district" name="district_id">
                                <?php $__currentLoopData = $districss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $districssItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($districssItem->district_id); ?>"><?php echo e($districssItem->district_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select" id="city" name="city_id">
                                <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cityItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cityItem->city_id); ?>"><?php echo e($cityItem->city_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                            class="bx bx-save"></i> Save Investigation Witness</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Policeblade/Investi-witness.blade.php ENDPATH**/ ?>