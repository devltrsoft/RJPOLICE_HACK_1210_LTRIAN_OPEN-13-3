<?php
include("../conn.php");

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


$sql="INSERT INTO `message_chatbot`(`station_id`, `user_id`, `question`, `answer`) VALUES ('$station_id','$user_id','$question','$answer')";

if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}




?>