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
                    <div class="container mt-4">
                        <div class="card">
                            <div class="card-body">

                                <br>

                                <div class="row">
                                    <div class="col-md-2">

                                        <div class="rounded-circle overflow-hidden" style="width: 70px; height: 70px;">
                                            <img src="assets/img/rajasthan_police.png" class="img-fluid rounded-circle"
                                                alt="User Photo">
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <h5 class="card-title"><?php echo e($item->news_title); ?></h5>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col">

                                    </div>
                                </div>

                                <div class="card ">
                                    <div class="card-body">
                                        <?php if($item->news_photo_path): ?>
                                        <br>
                                        <center>
                                            <img src="<?php echo e(asset('police_api/inputfiles/' . $item->news_photo_path)); ?>"
                                                class="img-fluid" alt="Post Photo" style="width: 400px; height: 300px;">
                                        </center><br><br>
                                    
                                    <?php endif; ?>
                                    


                                        <p class="card-text"><?php echo e($item->news_description); ?></p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>

























                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>
        </section>


    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/Userblade/News.blade.php ENDPATH**/ ?>