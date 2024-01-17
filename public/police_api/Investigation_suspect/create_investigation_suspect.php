<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['suspect_photo']) && !empty($_POST['suspect_photo'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['suspect_photo'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }
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

if($fir==""){
    $fir="2023-12-14-1";
    }

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


$sql="INSERT INTO `investigation_suspect`(`fir_id`, `country_id`, `state_id`, `district_id`, `city_id`, `suspect_fname`, `suspect_mname`, `suspect_lname`, `suspect_address`, `suspect_dob`, `suspect_gender`, `suspect_mobile_no`, `suspect_email`, `suspect_adhar`, `suspect_photo`, `suspect_pan_no`,`investigation_suspect_desc`) VALUES ('$fir','$country_id', '$state_id', '$dist_id','$city_id','$fname','$mname','$lname','$address','$dob','$gender','$mobile','$email','$adhar', '$photo', '$suspect_pan_no','$investigation_suspect_desc')";
//echo $sql;
//echo "link=".$link;
if(mysqli_query($conn,$sql)){
//echo"success";

$tracking_date = date('Y-m-d H:i:s');
$description = "one suspect is added that is ".$fname." ".$lname;
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