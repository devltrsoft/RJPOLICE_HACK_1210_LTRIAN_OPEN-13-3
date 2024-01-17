<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id=$_POST['criminal_complaint_id'];
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
$c=date('Y-m-d H:i:s');
$sql="UPDATE `criminal_complaint` SET `fir_id`='$fir_id',`criminal_id`='$criminal_id',`punishment`='$punishment',`duration`='$duration',`updated_at`='$c' WHERE `criminal_complaint_id`='$id'";

if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}
}




?>