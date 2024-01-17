;
<?php $__env->startSection('main-container'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><?php echo e(GoogleTranslate::trans('Add Complaint', \App::getLocale())); ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/index')); ?>">Home</a></li>
                    <li class="breadcrumb-item"> <?php echo e(GoogleTranslate::trans('CompaltedFIR', \App::getLocale())); ?></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="container">
        <section class="section dashboard ">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <!-- Column content goes here -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                            </div>
                                    <form action="<?php echo e(url('/addcomplaint')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="complaint_type_id"><?php echo e(GoogleTranslate::trans('Complaint Type', \App::getLocale())); ?></label>
                                            <select class="form-select" name="complaint_type_id">
                                                <?php $__currentLoopData = $complaintstypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaintstypesItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($complaintstypesItem->complaint_type_id); ?>">
                                                        <?php echo e(GoogleTranslate::trans($complaintstypesItem->complaint_type_name, \App::getLocale())); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="complaint_subject">                                             <?php echo e(GoogleTranslate::trans($item->complaint_subject, \App::getLocale())); ?>

                                                <?php echo e(GoogleTranslate::trans('Complaint Subject', \App::getLocale())); ?></label>
                                            <input type="text" class="form-control" name="complaint_subject" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="complaint_description"><?php echo e(GoogleTranslate::trans('Complaint Description', \App::getLocale())); ?></label>
                                            <textarea class="form-control" name="complaint_description" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="complaint_against"><?php echo e(GoogleTranslate::trans('Complaint Against', \App::getLocale())); ?></label>
                                            <input type="text" class="form-control" name="complaint_against" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="complaint_location"><?php echo e(GoogleTranslate::trans('Complaint Location', \App::getLocale())); ?></label>
                                            <input type="text" class="form-control" name="complaint_location" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="incident_date"><?php echo e(GoogleTranslate::trans('Incident Date', \App::getLocale())); ?></label>
                                            <input type="date" class="form-control" name="incident_date" required>
                                        </div>

                                        <div class="form-group">
                                    <label for="complaint_fir_id"><?php echo e(GoogleTranslate::trans('complaint/fir', \App::getLocale())); ?></label>
                                    <select class="form-select" name="complaint_fir_id" required>
                                        <?php $__currentLoopData = $complaintfir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($statusItem->complaint_fir_id); ?>">
                                                <?php echo e(GoogleTranslate::trans( $statusItem->complaint_fir_name , \App::getLocale())); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    </div>

                                        
                                </div>

                                <div class="card-footer">

                                    <button type="submit" class="btn btn-primary" style="float: right;" name="save_total_complaints"><i
                                            class="bx bx-save"></i> <?php echo e(GoogleTranslate::trans('Add Complaint', \App::getLocale())); ?></button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Userblade/Addcomplaint.blade.php ENDPATH**/ ?>