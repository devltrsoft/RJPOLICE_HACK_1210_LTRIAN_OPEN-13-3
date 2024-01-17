<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['criminal_photo']) && !empty($_POST['criminal_photo'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['criminal_photo'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }
    

$fname=$_POST['criminal_fname'];
$mname=$_POST['criminal_mname'];
$lname=$_POST['criminal_lname'];
$country_id=$_POST['country_id'];
$state_id=$_POST['state_id'];
$dist_id=$_POST['district_id'];
$city_id=$_POST['city_id'];
$email=$_POST['criminal_email'];

$gender=$_POST['gender'];
$adhar=$_POST['criminal_adhar'];
//$photo=$_POST['criminal_photo'];
$dob=$_POST['criminal_dob'];
$address=$_POST['criminal_address'];

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



$sql="INSERT INTO `criminal_detail`(`criminal_fname`, `criminal_mname`, `criminal_lname`, `country_id`, `state_id`, `district_id`, `city_id`, `criminal_email`, `gender`, `criminal_dob`, `criminal_adhar`,`criminal_photo`, `criminal_address`) VALUES ('$fname','$mname','$lname','$country_id','$state_id','$dist_id','$city_id','$email','$gender','$dob','$adhar','$photo', '$address')";
//echo $sql;

if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}

}


?>