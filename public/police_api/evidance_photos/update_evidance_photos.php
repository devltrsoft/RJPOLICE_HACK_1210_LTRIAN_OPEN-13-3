<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id=$_POST['evidance_photos_id'];
$evidance_id=$_POST['evidance_id'];
$evidance_photos_path=$_POST['evidance_photos_path'];
$evidance_photos_description=$_POST['evidance_photos_description'];

if($evidance_id==""){
    $evidance_id="1";
}
$c=date('Y-m-d H:i:s');

$sql="UPDATE `evidance_photos` SET `evidance_id`='$evidance_id',`evidance_photos_path`='$evidance_photos_path',`evidance_photos_description`='$evidance_photos_description',`updated_at`='$c' WHERE `evidance_photos_id`='$id'";

if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}
}



?>