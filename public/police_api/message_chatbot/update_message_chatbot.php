<?php
include("../conn.php");

$id=$_POST['message_chatbot_id'];
$station_id=$_POST['station_id'];
$user_id=$_POST['user_id'];
$question=$_POST['question'];
$answer=$_POST['answer'];

if($station_id==""){
    $station_id="1";
}
if($user_id==""){
    $user_id="1";
}

$currentDate = date('Y-m-d');
$sql = "UPDATE `message_chatbot` SET `station_id`='$station_id', `user_id`='$user_id', `question`='$question', `answer`='$answer', `updated_at`='$currentDate' WHERE `message_chatbot_id`='$id'";


if(mysqli_query($conn,$sql)){
echo"success";
//echo date('Y-m-d');
}
else{
echo"error";
}




?>