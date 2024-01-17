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
                                            data-bs-target="#fullscreenShowModal<?php echo e($item->investigation_victim_id); ?>">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo e($item->fir_id); ?></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-journal-bookmark-fill"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php echo e($suspect->victim_fname); ?> <?php echo e($suspect->victim_lname); ?></h6>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="modal fade" id="fullscreenShowModal<?php echo e($item->investigation_victim_id); ?>"
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
                                                            class="bx bxs-download"></i>
                                                        Download</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
            </section>


    </main>

    <div class="modal fade" id="addModel" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Investigation Victim</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(url('/investigationvictim')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="country" class="form-label">Investigation Id</label>
                            <select class="form-select" id="country" name="investigation_id">
                                <?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->investigation_id); ?>"><?php echo e($item->investigation_id); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">email</label>
                            <input type="text" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">pan</label>
                            <input type="text" class="form-control" name="pan">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">gender</label>
                            <input type="text" class="form-control" name="gender">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">aadhar</label>
                            <input type="number" class="form-control" name="aadhar">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">photo</label>
                            <input type="file" class="form-control" name="aadhar">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">dob</label>
                            <input type="date" class="form-control" name="dob">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">address</label>
                            <input type="text" class="form-control" name="address">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">mobile</label>
                            <input type="number" class="form-control" name="mobile">
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">country</label>
                            <select class="form-select" id="country" name="country">
                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->country_name); ?>"><?php echo e($item->country_name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">state</label>
                            <select class="form-select" id="state" name="state">
                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->state_name); ?>"><?php echo e($item->state_name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">district</label>
                            <select class="form-select" id="state" name="district">
                                <?php $__currentLoopData = $districss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->district_name); ?>"><?php echo e($item->district_name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">city</label>
                            <select class="form-select" id="city" name="city">
                                <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->city_name); ?>"><?php echo e($item->city_name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                            class="bx bx-save"></i> Save Investigation Victim</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Policeblade/investigationVictim.blade.php ENDPATH**/ ?>