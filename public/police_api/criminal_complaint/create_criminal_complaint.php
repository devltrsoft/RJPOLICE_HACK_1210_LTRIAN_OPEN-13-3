<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fir_id=$_POST['fir_id'];
$criminal_id=$_POST['criminal_id'];
$punishment=$_POST['punishment'];
$duration=$_POST['duration'];

if($fir_id==""){
    $fir_id="2023-12-14-1";
}
if($criminal_id==""){
    $criminal_id="1";
}
$sql="INSERT INTO `criminal_complaint`(`fir_id`, `criminal_id`, `punishment`, `duration`) VALUES ('$fir_id','$criminal_id','$punishment','$duration')";

if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}
}




?>