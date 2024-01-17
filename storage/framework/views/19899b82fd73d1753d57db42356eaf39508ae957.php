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
                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xxl-4 col-md-6">
                  
                    
                    <div class="card info-card sales-card"  data-bs-toggle="modal"
                    data-bs-target="#fullscreenShowModal<?php echo e($item->notification_id); ?>">    
                        

                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($item->notification_title); ?></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-journal-bookmark-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?php echo e($item->notification_description); ?></h6>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>





                <div class="modal fade" id="fullscreenShowModal<?php echo e($item->notification_id); ?>" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen" >
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


                
            </div>
        </section>


    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend//Userblade/Notification.blade.php ENDPATH**/ ?>