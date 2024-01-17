<?php
include("../conn.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['investigation_witness_photo']) && !empty($_POST['investigation_witness_photo'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['investigation_witness_photo'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }
$fir=$_POST['fir_id'];
$fname=$_POST['investigation_witness_fname'];
$mname=$_POST['investigation_witness_mname'];
$lname=$_POST['investigation_witness_lname'];
$country_id=$_POST['country_id'];
$state_id=$_POST['state_id'];
$dist_id=$_POST['district_id'];
$city_id=$_POST['city_id'];
$email=$_POST['investigation_witness_email'];
$witness_pan=$_POST['witness_pan'];
$gender=$_POST['investigation_witness_gender'];
$adhar=$_POST['investigation_witness_adhar'];
//$photo=$_POST['investigation_witness_photo'];
$dob=$_POST['investigation_witness_dob'];
$address=$_POST['investigation_witness_address'];
$mobile=$_POST['investigation_witness_mobile'];
$investigation_witness_desc=$_POST['investigation_witness_desc'];

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
    

$sql="INSERT INTO `investigation_witness`(`fir_id`, `country_id`, `state_id`, `district_id`, `city_id`, `investigation_witness_fname`, `investigation_witness_mname`, `investigation_witness_lname`, `investigation_witness_address`, `investigation_witness_dob`, `investigation_witness_gender`, `investigation_witness_mobile`, `investigation_witness_email`, `investigation_witness_photo`,  `investigation_witness_adhar`, `witness_pan`,`investigation_witness_desc`) VALUES ('$fir','$country_id','$state_id','$dist_id','$city_id','$fname','$mname','$lname','$address','$dob', '$gender', '$mobile', '$email','$photo', '$adhar', '$witness_pan', '$investigation_witness_desc')";


if(mysqli_query($conn,$sql)){
//echo"success";

$tracking_date = date('Y-m-d H:i:s');
$description = "one witness is added that is ".$fname." ".$lname;
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