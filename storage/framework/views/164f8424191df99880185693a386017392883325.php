<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        header {
            width: 100%;
            position: fixed;
            top: -50px;
            left: 15px;
            right: 0;
            display: block;
            background-color: #fff;
            color: black;
            font-size: 34px;
            font-weight: bolder;
            border-radius: 5px;
            height: 100px;
            text-align: center;
            line-height: 35px;
            border-bottom:2px solid #000 
         
        }
        .header-station {
            text-align: center;

            background-color: #fff;
            color: black;
            font-size: 24px;
          
         
        }
    </style>
</head>

<body>

    <header>

        Rajsthan State
    </header>
        <div class="header header-station">
        Jaipur Police Station
    </div>
    
    <div class="container-fluid mt-5">
        <table class=" table-bordered mb-5">
            <thead>
                <tr>
                    <th>Sr.no</th>
                    <th>Complaint No</th>
                    <th>Complaint Type</th>
                    <th>Complaint Subject</th>
                    <th>Complaint Against</th>
                    <th>Complaint Location</th>
                    <th>Incident Date</th>
                    <th>Status</th>
                    <th>Complaint/FIR</th>
                    <th>User</th>
                    <th>created Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->cmp_id); ?></td>
                        <td><?php echo e($item->complaint_type_name); ?></td>
                        <td><?php echo e($item->complaint_subject); ?></td>
                        <td><?php echo e($item->complaint_against); ?></td>
                        <td><?php echo e($item->complaint_location); ?></td>
                        <td><?php echo e($item->incident_date); ?></td>
                        <td><?php echo e($item->status_name); ?></td>
                        <td><?php echo e($item->complaint_fir_name); ?></td>
                        <td><?php echo e($item->user_fname); ?> <?php echo e($item->user_mname); ?> <?php echo e($item->user_lname); ?></td>
                        <td><?php echo e($item->created_at); ?></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>


</body>

</html>
<?php /**PATH /home/ltrproin/public_html/rj.ltr-soft.com/resources/views/frontend/userpdf_view.blade.php ENDPATH**/ ?>