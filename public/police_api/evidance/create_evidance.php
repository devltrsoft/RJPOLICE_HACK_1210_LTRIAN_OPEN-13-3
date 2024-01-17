<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
$fir_id=$_POST['fir_id'];
$evidance_name=$_POST['evidance_name'];
$evidance_description=$_POST['evidance_description'];


if($fir_id==""){
$fir_id="2023-12-14-1";
}

$sql="INSERT INTO `evidance`( `fir_id`, `evidance_name`, `evidance_description`) VALUES ('$fir_id','$evidance_name','$evidance_description')";

if(mysqli_query($conn,$sql)){
//echo"success";


$tracking_date = date('Y-m-d H:i:s');
$description = "one evidance is added that is ".$evidance_name;
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