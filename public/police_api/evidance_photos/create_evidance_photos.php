<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$evidance_id=$_POST['evidance_id'];
$evidance_photos_path=$_POST['evidance_photos_path'];
$evidance_photos_description=$_POST['evidance_photos_description'];

if($evidance_id==""){
    $evidance_id="1";
}

$sql="INSERT INTO `evidance_photos`(`evidance_id`, `evidance_photos_path`, `evidance_photos_description`) VALUES ('$evidance_id','$evidance_photos_path','$evidance_photos_description')";

if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}
}



?>