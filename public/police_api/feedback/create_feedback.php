<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {


$user_id=$_POST['user_id'];
$overall_satisfaction=$_POST['satisfaction'];
$trust_and_confidance=$_POST['trust'];

$quality_of_service=$_POST['quality'];
$asked_for_brief=$_POST['asked_for_brief'];
$fairness_of_investigation=$_POST['fairness'];
$time_taken_to_resoive_complaint=$_POST['taken_to_resoive'];


    

if($user_id==""){
    $user_id="1";
}
$sql="INSERT INTO `feedback`(`user_id`, `overall_satisfaction`, `trust_and_confidance`, `quality_of_service`, `fairness_of_investigation`, `asked_for_brief`, `time_taken_to_resoive_complaint`) VALUES ('$user_id','$overall_satisfaction','$trust_and_confidance','$quality_of_service','$fairness_of_investigation','$asked_for_brief','$time_taken_to_resoive_complaint')";
//echo $sql;
//echo "link=".$link;
if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}
}




?>