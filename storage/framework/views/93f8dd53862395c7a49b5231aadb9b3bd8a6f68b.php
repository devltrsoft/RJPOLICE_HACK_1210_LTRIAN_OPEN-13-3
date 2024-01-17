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

        <section class="section dashboard">
            <div class="row">
                <?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaintitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $complaintitem->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card" data-bs-toggle="modal"
                                data-bs-target="#fullscreenShowModal<?php echo e($item->complaint_id); ?>">
                                <div class="filter" data-bs-toggle="modal"
                                    data-bs-target="#editModel<?php echo e($item->complaint_witness_id); ?>">
                                    <a class="icon" href="#" data-bs-toggle="dropdown">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($item->cmp_id); ?></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-bookmark-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo e($item->complaint_witness_fname); ?> <?php echo e($item->complaint_witness_lname); ?>

                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>





                        <div class="modal fade" id="editModel<?php echo e($item->complaint_witness_id); ?>" tabindex="-1">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Complaint Witness</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo e(route('casewitness.update', $item->complaint_witness_id)); ?>"
                                            method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <div class="form-group">
                                                <label for="fname" class="form-label">First
                                                    Name</label>
                                                <input type="text" class="form-control" name="complaint_witness_fname"
                                                    value="<?php echo e($item->complaint_witness_fname); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="mname" class="form-label">Middle
                                                    Name</label>
                                                <input type="text" class="form-control" name="complaint_witness_mname"
                                                    value="<?php echo e($item->complaint_witness_mname); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="lname" class="form-label">Last
                                                    Name</label>
                                                <input type="text" class="form-control" id="lname"
                                                    name="complaint_witness_lname"
                                                    value="<?php echo e($item->complaint_witness_lname); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address"
                                                    name="complaint_witness_address"
                                                    value="<?php echo e($item->complaint_witness_address); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="dob" class="form-label">Date of
                                                    Birth</label>
                                                <input type="date" class="form-control" id="dob"
                                                    name="complaint_witness_dob"
                                                    value="<?php echo e($item->complaint_witness_dob); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select class="form-select" id="gender" name="complaint_witness_gender">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile" class="form-label">Mobile
                                                    Number</label>
                                                <input type="tel" class="form-control" id="mobile"
                                                    name="complaint_witness_mobile"
                                                    value="<?php echo e($item->complaint_witness_mobile); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    name="complaint_witness_email"
                                                    value="<?php echo e($item->complaint_witness_email); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="photoPath" class="form-label">Photo
                                                    Path</label>
                                                <input type="file" class="form-control" id="photoPath"
                                                    name="complaint_witness_photo_path">
                                                <?php if($item->complaint_witness_photo_path): ?>
                                                    <img src="<?php echo e(asset('police_api/inputfiles/' . $item->complaint_witness_photo_path)); ?>"
                                                        alt="Witness Photo" style="max-width: 150px; margin-top: 10px;">
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="complaint_witness_pan"
                                                    class="form-label">complaint_witness_pan</label>
                                                <input type="text" class="form-control" id="lname"
                                                    name="complaint_witness_pan"
                                                    value="<?php echo e($item->complaint_witness_pan); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="complaint_witness_adhar"
                                                    class="form-label">complaint_witness_adhar</label>
                                                <input type="text" class="form-control" id="lname"
                                                    name="complaint_witness_adhar"
                                                    value="<?php echo e($item->complaint_witness_adhar); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class="form-label">Country</label>
                                                <select class="form-select" id="country" name="country_id">
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countryItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($countryItem->country_id); ?>">
                                                            <?php echo e($countryItem->country_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="state" class="form-label">State</label>
                                                <select class="form-select" id="state" name="state_id">
                                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statesItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($statesItem->state_id); ?>">
                                                            <?php echo e($statesItem->state_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="district" class="form-label">District</label>
                                                <select class="form-select" id="district" name="district_id">
                                                    <?php $__currentLoopData = $districss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $districssItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($districssItem->district_id); ?>">
                                                            <?php echo e($districssItem->district_name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="city" class="form-label">City</label>
                                                <select class="form-select" id="city" name="city_id">
                                                    <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cityItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($cityItem->city_id); ?>">
                                                            <?php echo e($cityItem->city_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                                                class="bx bx-save"></i>
                                            Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </section>


    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Userblade/Case-witness.blade.php ENDPATH**/ ?>