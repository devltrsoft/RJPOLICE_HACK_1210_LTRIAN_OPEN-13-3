



<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $id=$_POST['evidance_id']; 
$fir_id=$_POST['fir_id'];
$evidance_name=$_POST['evidance_name'];
$evidance_description=$_POST['evidance_description'];

$c=date('Y-m-d H:i:s');


if($fir_id==""){
$fir_id="2023-12-14-1";
}

$sql="UPDATE `evidance` SET `fir_id`='$fir_id',`evidance_name`='$evidance_name',`evidance_description`='$evidance_description',`updated_at`='$c' WHERE `evidance_id`='$id'";

if(mysqli_query($conn,$sql)){
//echo"success";
$tracking_date = date('Y-m-d H:i:s');
$description = "one evidance is updated that is ".$evidance_name;
$registered_police =$_POST['police_id'];



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