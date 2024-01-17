<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//$category_id=$_POST['feedback_category_id'];
$id=$_POST['feedback_id'];
$user_id=$_POST['user_id'];
$overall_satisfaction=$_POST['satisfaction'];
$trust_and_confidance=$_POST['trust'];

$quality_of_service=$_POST['quality'];
$asked_for_brief=$_POST['asked_for_brief'];
$fairness_of_investigation=$_POST['fairness'];
$time_taken_to_resoive_complaint=$_POST['taken_to_resoive'];


    $category_id="12";

if($user_id==""){
    $user_id="1";
}

$c=date('Y-m-d H:i:s');

$sql="UPDATE `feedback` SET `feedback_category_id`='$category_id',`user_id`='$user_id',`overall_satisfaction`='$overall_satisfaction',`trust_and_confidance`='$trust_and_confidance',`quality_of_service`='$quality_of_service',`fairness_of_investigation`='$fairness_of_investigation',`asked_for_brief`='$asked_for_brief',`time_taken_to_resoive_complaint`='$time_taken_to_resoive_complaint',`updated_at`='$c' WHERE `feedback_id`='$id'";
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