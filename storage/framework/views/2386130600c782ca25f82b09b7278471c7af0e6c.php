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
                            data-bs-target="#addinvi">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                        
                    </div>


                </div>

                <div class="row">
                    <?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaintitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $complaintitem->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $complaintitem->complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card info-card sales-card" data-bs-toggle="modal"
                                        data-bs-target="#fullscreenShowModal<?php echo e($item->investigation_id); ?>">

                                        <div class="filter">
                                            <a class="icon" data-bs-toggle="modal"
                                                data-bs-target="#editModel<?php echo e($item->complaint_id); ?>">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">FIR-<?php echo e($item->fir_id); ?></h5>

                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-journal-bookmark-fill"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <h6><?php echo e($itemss->complaint_subject); ?></h6>

                                                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    <div class="modal fade" id="addinvi" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Investigation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(url('/investigation')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="complaint_type_id">Complaint </label>
                            <select class="form-select" name="complaint_id">
                                <?php $__currentLoopData = $complaints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaintItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($complaintItem->complaint_id); ?>">
                                        <?php echo e($complaintItem->complaint_subject); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="complaint_subject">investigation_start_date</label>
                            <input type="date" class="form-control" name="investigation_start_date" required>
                        </div>

                        <div class="form-group">
                            <label for="complaint_description">investigation_end_date</label>
                            <input type="date" class="form-control" name="investigation_end_date" required>
                        </div>

                        <div class="form-group">
                            <label for="complaint_against">location </label>
                            <input type="text" class="form-control" name="location" required>
                        </div>

                        <div class="form-group">
                            <label for="incident_date">incedant_reporting</label>
                            <input type="text" class="form-control" name="incedant_reporting" required>
                        </div>

                        <div class="form-group">
                            <label for="incident_date">evidance_property</label>
                            <input type="text" class="form-control" name="evidance_property" required>
                        </div>

                        <div class="form-group">
                            <label for="incident_date">investigation_description</label>
                            <input type="text" class="form-control" name="investigation_description" required>
                        </div>

                        

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="save_completed_fir"><i class="bx bx-save"></i> Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Policeblade/investigation-cases.blade.php ENDPATH**/ ?>