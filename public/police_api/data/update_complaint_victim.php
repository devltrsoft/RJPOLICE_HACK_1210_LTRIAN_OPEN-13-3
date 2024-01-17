<?php
include('../conn.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['photo']) && !empty($_POST['photo'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['photo'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }
$$id=$_POST['complaint_victim_id'];
$complaint_victim_fname=$_POST['complaint_victim_fname'];
$complaint_victim_mname=$_POST['complaint_victim_mname'];
$complaint_victim_lname=$_POST['complaint_victim_lname'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
//$photo=$_POST['photo'];
$complaint_id=$_POST['complaint_id'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];
$city=$_POST['city'];
$aadhar=$_POST['aadhar'];
$pan=$_POST['pan'];

$c = date('Y-m-d');
$insertquery="UPDATE `complaint_victim` SET `complaint_id`='$complaint_id',`complaint_victim_fname`='$complaint_victim_fname',`complaint_victim_mname`='$complaint_victim_mname',`complaint_victim_lname`='$complaint_victim_lname',`country`='$country',`state`='$state',`district`='$district',`city`='$city',`email`='$email',`pan`='$pan',`gender`='$gender',`aadhar`='$aadhar',`photo`='$filename',`dob`='$dob',`address`='$address',`mobile`='$mobile',`updated_at`='$c' WHERE `complaint_victim_id`='$id'";

$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}
}
?>

