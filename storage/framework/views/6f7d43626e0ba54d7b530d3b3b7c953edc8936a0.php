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
                        <?php $__currentLoopData = $item->criminal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $criminal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $criminal->criminaldetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $criminaldetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card info-card sales-card" data-bs-toggle="modal"
                                    data-bs-target="#fullscreenShowModal<?php echo e($item->investigation_id); ?>">  
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($criminal->fir_id); ?></h5>

                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-journal-bookmark-fill"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <h6><?php echo e($criminaldetail->criminal_fname); ?> <?php echo e($criminaldetail->criminal_lname); ?></h6>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal fade" id="fullscreenShowModal<?php echo e($item->investigation_id); ?>" tabindex="-1">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Show Completed FIR</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <b>Complaint Subject : </b><?php echo e($item->complaint_subject); ?><br>
                                                <b>FIR Description : </b><?php echo e($item->investigation_description); ?><br>
                                                <b>FIR Against : </b><?php echo e($item->complaint_against); ?><br>
                                                <b>Incident Date : </b><?php echo e($item->incident_date); ?><br>
                                                <b>FIR Date(data and time) : </b><?php echo e($item->created_at); ?><br>
                                                
                                                <b>FIR Suspect : </b><?php echo e($item->suspect_fname); ?> <?php echo e($item->suspect_mname); ?> <?php echo e($item->suspect_lname); ?><br>
                                                <b>FIR Witness : </b><?php echo e($item->investigation_witness_fname); ?> <?php echo e($item->cinvestigation_witness_mname); ?> <?php echo e($item->investigation_witness_lname); ?>

                
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </section>


    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Policeblade/Criminal.blade.php ENDPATH**/ ?>