<?php
include("../conn.php");

if (isset($_POST['suspect_photo']) && !empty($_POST['suspect_photo'])) {
    
    $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
    $image_data = $_POST['suspect_photo'];

    
    $upload_dir = "../inputfiles/";

    
    $file_path = $upload_dir . $filename;

    
     if (file_put_contents($file_path, base64_decode($image_data))) {

     }

}

$id=$_POST['investigation_suspect_id'];
$fir=$_POST['fir_id'];
$fname=$_POST['suspect_fname'];
$mname=$_POST['suspect_mname'];
$lname=$_POST['suspect_lname'];
$country_id=$_POST['country_id'];
$state_id=$_POST['state_id'];
$dist_id=$_POST['district_id'];
$city_id=$_POST['city_id'];
$email=$_POST['suspect_email'];
$suspect_pan_no=$_POST['suspect_pan_no'];
$gender=$_POST['suspect_gender'];
$adhar=$_POST['suspect_adhar'];
//$photo=$_POST['suspect_photo'];
$dob=$_POST['suspect_dob'];
$address=$_POST['suspect_address'];
$mobile=$_POST['suspect_mobile_no'];
$investigation_suspect_desc=$_POST['investigation_suspect_desc'];

if($country_id==""){
    $country_id="1";
}
if($state_id==""){
    $state_id="1";
}
if($dist_id==""){
    $dist_id="1";
}
if($city_id==""){
$city_id="1";
}

$c=date('Y-m-d H:i:s');
$sql="UPDATE `investigation_suspect` SET `fir_id`='$fir',`country_id`='$country_id',`state_id`='$state_id',`district_id`='$dist_id',`city_id`='$city_id',`suspect_fname`='$fname',`suspect_mname`='$mname',`suspect_lname`='$lname',`suspect_address`='$address',`suspect_dob`='$dob',`suspect_gender`='$gender',`suspect_mobile_no`='$mobile',`suspect_email`='$email',`suspect_adhar`='$address',`suspect_photo`='$photo',`updated_at`='$c', `suspect_pan_no`='$suspect_pan_no', `investigation_suspect_desc`='$investigation_suspect_desc' WHERE `investigation_suspect_id`='$id'";
//echo $sql;
//echo "link=".$link;
if(mysqli_query($conn,$sql)){
//echo"success";
$tracking_date = date('Y-m-d H:i:s');
$description = "one suspect is updated that is ".$fname." ".$lname;
$registered_police ="1";                                   //$_POST['registered_police'];



$sql = "INSERT INTO `fir_tracking`(`fir_id`, `tracking_date`, `description`, `Registered_police`) VALUES ('$fir_id','$tracking_date','$description','$registered_police')";

if(mysqli_query($conn, $sql)){
  echo "success";
} else {
    echo "Fail";
}


}
else{
echo"error";
}




?>