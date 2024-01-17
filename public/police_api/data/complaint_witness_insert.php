<?php
include('../conn.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['complaint_witness_photo']) && !empty($_POST['complaint_witness_photo'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['complaint_witness_photo'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }

$complaint_witness_fname=$_POST['complaint_witnes_fname'];
$complaint_witness_mname=$_POST['complaint_witness_mname'];
$complaint_witness_lname=$_POST['complaint_witness_lname'];
$complaint_witness_address=$_POST['complaint_witness_address'];
$complaint_witness_dob=$_POST['complaint_witness_dob'];
$complaint_witness_gender=$_POST['complaint_witness_gender'];
$complaint_witness_mobile=$_POST['complaint_witness_mobile'];
$complaint_witness_email=$_POST['complaint_witness_email'];
//$complaint_witness_photo=$_POST['complaint_witness_photo'];
$complaint_id=$_POST['complaint_id'];

$country_id=$_POST['country_id'];
$state_id=$_POST['state_id'];
$district_id=$_POST['district_id'];
$city_id=$_POST['city_id'];
$complaint_witness_adhar=$_POST['complaint_witness_adhar'];
$complaint_witness_pan=$_POST['complaint_witness_pan'];

$c = date('Y-m-d');
$insertquery="INSERT INTO complaint_witness(complaint_witness_fname,complaint_witness_mname,complaint_witness_lname,complaint_witness_address,complaint_witness_dob,complaint_witness_gender,complaint_witness_mobile,complaint_witness_email,complaint_witness_photo_path,country_id,state_id,district_id,city_id,complaint_witness_adhar, complaint_witness_pan, complaint_id)VALUES('$complaint_witness_fname','$complaint_witness_mname','$complaint_witness_lname','$complaint_witness_address','$complaint_witness_dob','$complaint_witness_gender','$complaint_witness_mobile','$complaint_witness_email','$filename','$country_id','$state_id','$district_id','$city_id', '$complaint_witness_adhar','$complaint_witness_pan', '$complaint_id')";

$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}
}
?>

