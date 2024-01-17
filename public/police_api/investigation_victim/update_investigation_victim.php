<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['victim_photo']) && !empty($_POST['victim_photo'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['victim_photo'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }

$id=$_POST['investigation_victim_id'];
$fir=$_POST['fir_id'];
$fname=$_POST['victim_fname'];
$mname=$_POST['victim_mname'];
$lname=$_POST['victim_lname'];
$country_id=$_POST['country_id'];
$state_id=$_POST['state_id'];
$dist_id=$_POST['district_id'];
$city_id=$_POST['city_id'];
$email=$_POST['victim_email'];
$victim_pan=$_POST['victim_pan'];
$gender=$_POST['victim_gender'];
$adhar=$_POST['victim_adhar'];
//$photo=$_POST['victim_photo'];
$dob=$_POST['victim_dob'];
$address=$_POST['victim_address'];
$mobile=$_POST['victim_mobile_no'];
$investigation_victim_desc=$_POST['investigation_victim_desc'];


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
if($fir==""){
    $fir="2023-12-14-1";
    }
    $c=date('Y-m-d H:i:s');
$sql="UPDATE victim SET `fir_id`='$fir',`country_id`='$country_id',`state_id`='$state_id',`district_id`='$dist_id',`city_id`='$city_id',`victim_fname`='$fname',`victim_mname`='$mname',`victim_lname`='$lname',`victim_address`='$address',`victim_dob`='$dob',`victim_gender`='$gender',`victim_mobile_no`='$mobile',`victim_email`='$email', `victim_adhar`='$adhar',`victim_photo`='$photo',`updated_at`='$c', `victim_pan`='$victim_pan', `victim`='$investigation_victim_desc' WHERE `investigation_victim_id`='$id'";
//echo $sql;
//echo "link=".$link;
if(mysqli_query($conn,$sql)){
//echo"success";
$tracking_date = date('Y-m-d H:i:s');
$description = "one victim is updated that is ".$fname." ".$lname;
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


}

?>