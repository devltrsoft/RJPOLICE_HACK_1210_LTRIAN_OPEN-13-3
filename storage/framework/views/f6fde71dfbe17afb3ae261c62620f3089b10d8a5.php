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


                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card"  data-bs-toggle="modal"
                        data-bs-target="#fullscreenShowModal<?php echo e($item->complaint_id); ?>">
                            <div class="filter">
                                <a class="icon" data-bs-toggle="modal"
                                data-bs-target="#editModel<?php echo e($item->complaint_id); ?>">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($item->cmp_id); ?></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal-bookmark-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            <?php echo e(GoogleTranslate::trans($item->complaint_subject, \App::getLocale())); ?>


                                            </h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="modal fade" id="editModel<?php echo e($item->complaint_id); ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Complaint</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form
                                        action="<?php echo e(route('TotalCompalint.update', $item->complaint_id)); ?>"
                                        method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>

                                        <div class="form-group">
                                            <label for="complaint_type_id">Complaint Type</label>
                                            <select class="form-select" name="complaint_type_id">
                                                <?php $__currentLoopData = $complaintstypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaintstypesItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($complaintstypesItem->complaint_type_id); ?>">
                                                        <?php echo e($complaintstypesItem->complaint_type_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="complaint_subject">Complaint Subject</label>
                                            <input type="text" class="form-control"
                                                name="complaint_subject"
                                                value="<?php echo e($item->complaint_subject); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="complaint_description">Complaint
                                                Description</label>
                                            <textarea class="form-control" name="complaint_description"><?php echo e($item->complaint_description); ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="complaint_against">Complaint Against</label>
                                            <input type="text" class="form-control"
                                                name="complaint_against"
                                                value="<?php echo e($item->complaint_against); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="complaint_location">Complaint Location</label>
                                            <input type="text" class="form-control"
                                                name="complaint_location"
                                                value="<?php echo e($item->complaint_location); ?>">
                                        </div>


                                        <div class="form-group">
                                            <label for="incident_date">Incident Date</label>
                                            <input type="date" class="form-control"
                                                name="incident_date"
                                                value="<?php echo e($item->incident_date); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="complaint_fir_id">complaint/fir</label>
                                            <select class="form-select" name="complaint_fir_id"
                                                required>
                                                <?php $__currentLoopData = $complaintfir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($statusItem->complaint_fir_id); ?>">
                                                        <?php echo e($statusItem->complaint_fir_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="status_id">Status</label>
                                            <select class="form-select" name="status_id" required>
                                                <?php $__currentLoopData = $statuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($statusItem->status_id); ?>">
                                                        <?php echo e($statusItem->status_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary"
                                        name="save_completed_fir"><i class="bx bx-save"></i> Save
                                        changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="fullscreenShowModal<?php echo e($item->complaint_id); ?>" tabindex="-1">
                        <div class="modal-dialog modal-fullscreen" >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Show Complaint</h5>
                                    <a href="<?php echo e(url('/TotalCompalint/pdf')); ?>" class="btn btn-primary" download="filename.pdf">Download</a>

                                </div>
                                <div class="modal-body">
                                    <b>User Name : </b><?php echo e($item->user_fname); ?> <?php echo e($item->user_mname); ?>

                                    <?php echo e($item->user_lname); ?><br>
                                    <b>Complaint Subject : </b><?php echo e($item->complaint_subject); ?><br>
                                    <b>Complaint Description : </b><?php echo e($item->complaint_against); ?><br>
                                    <b>Complaint Against : </b><?php echo e($item->complaint_against); ?><br>
                                    <b>Incident Date : </b><?php echo e($item->incident_date); ?><br>
                                    <b>Complaint Date(data and time) : </b><?php echo e($item->created_at); ?><br>
                                    <b>Complaint Status : <?php echo e($item->status_name); ?></b><br>
                                    <b>Complaint Photos/ Videos/ Audios : </b><br>
                                    <b>Complaint Suspect : <?php echo e($item->complaint_suspect_fname); ?> <?php echo e($item->complaint_suspect_mname); ?> <?php echo e($item->complaint_suspect_lname); ?></b><br>
                                    <b>Complaint Witness : <?php echo e($item->complaint_witness_fname); ?> <?php echo e($item->complaint_witness_mname); ?> <?php echo e($item->complaint_witness_lname); ?></b><br>
                                    <b>Complaint Photos/ Videos/ Audios : </b><br>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </section>


    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Userblade/TotalComplaint.blade.php ENDPATH**/ ?>