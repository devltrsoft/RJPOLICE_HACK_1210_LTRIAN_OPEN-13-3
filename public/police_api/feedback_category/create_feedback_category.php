<?php
include('../conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name=$_POST['feedback_category_name'];



$sql="Insert into feedback_category(`feedback_category_name`) values('$name')";


if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}
}




?>