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
                                    data-bs-target="#editModel<?php echo e($item->evidance_id); ?>">
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
                                            <h6><?php echo e($item->complaint_photo_description); ?>

                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="editModel<?php echo e($item->evidance_id); ?>" tabindex="-1">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Complaint Evidance</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo e(route('casesevidance.update', $item->evidance_id)); ?>" method="post"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <div class="form-group">
                                                <label for="country" class="form-label">FIR Id</label>
                                                <select class="form-select" id="country" name="fir_id">
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countryItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item->fir_id); ?>">
                                                            <?php echo e($item->fir_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="mobile" class="form-label">Evidance Name</label>
                                                <input type="text" class="form-control" id="mobile"
                                                    name="evidance_name" value="<?php echo e($item->evidance_name); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="mobile" class="form-label">evidance description</label>
                                                <input type="text" class="form-control" id="mobile"
                                                    name="evidance_description" value="<?php echo e($item->evidance_description); ?>">
                                            </div>


                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    name="save_total_complaints"><i class="bx bx-save"></i>
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

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Userblade/Casesevidance.blade.php ENDPATH**/ ?>