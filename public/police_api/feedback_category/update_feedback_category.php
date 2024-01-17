<?php
include('../conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$id=$_POST['feedback_category_id'];
$name=$_POST['feedback_category_name'];



$sql="update feedback_category set feedback_category_name='$name' where feedback_category_id='$id'";


if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}
}



?>