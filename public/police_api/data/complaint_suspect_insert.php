<?php
include('../conn.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['complaint_suspect_photo']) && !empty($_POST['complaint_suspect_photo'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['complaint_suspect_photo'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }
$complaint_suspect_fname=$_POST['complaint_suspect_fname'];
$complaint_suspect_mname=$_POST['complaint_suspect_mname'];
$complaint_suspect_lname=$_POST['complaint_suspect_lname'];
$complaint_suspect_address=$_POST['complaint_suspect_address'];
$complaint_suspect_dob=$_POST['complaint_suspect_dob'];
$complaint_suspect_gender=$_POST['complaint_suspect_gender'];
$complaint_suspect_mobile_no=$_POST['complaint_suspect_mobile_no'];
$complaint_suspect_email=$_POST['complaint_suspect_email'];
$complaint_suspect_desc=$_POST['complaint_suspect_desc'];
$complaint_id=$_POST['complaint_id'];

$country_id=$_POST['country_id'];
$state_id=$_POST['state_id'];
$district_id=$_POST['district_id'];
$city_id=$_POST['city_id'];
//$complaint_suspect_photo=$_POST['complaint_suspect_photo'];

$complaint_suspect_adhar=$_POST['complaint_suspect_adhar'];
$complaint_suspect_pan=$_POST['complaint_suspect_pan'];


if($country_id==""){
    $country_id="1";
}
if($state_id==""){
    $state_id="1";
}
if($district_id==""){
    $district_id="1";
}
if($city_id==""){
$city_id="1";
}

if($complaint_id==""){
    $complaint_id="1";
    }

$insertquery="INSERT INTO complaint_suspect(complaint_suspect_fname,complaint_suspect_mname,complaint_suspect_lname,complaint_suspect_address,complaint_suspect_dob,complaint_suspect_gender,complaint_suspect_mobile_no,complaint_suspect_email,complaint_id,country_id,state_id,district_id,city_id, complaint_suspect_adhar, complaint_suspect_pan, complaint_suspect_photo_path, complaint_suspect_desc)VALUES('$complaint_suspect_fname','$complaint_suspect_mname','$complaint_suspect_lname','$complaint_suspect_address','$complaint_suspect_dob','$complaint_suspect_gender','$complaint_suspect_mobile_no','$complaint_suspect_email','$complaint_id','$country_id','$state_id','$district_id','$city_id','$complaint_suspect_adhar', '$complaint_suspect_pan', '$filename', '$complaint_suspect_desc')";

$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}
}
?>

