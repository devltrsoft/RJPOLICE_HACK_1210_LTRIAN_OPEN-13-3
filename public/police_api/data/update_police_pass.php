<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$password=$_POST['password'];
$police_mobile=$_POST['police_mobile'];

$insertquery="update police set police_password='$password' where police_mobile1='$police_mobile' OR police_mobile2='$police_mobile' OR police_email='$police_mobile'";

$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}
}
?>
