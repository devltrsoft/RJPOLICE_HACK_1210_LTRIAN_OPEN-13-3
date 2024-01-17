<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$password=$_POST['password'];
$user_mobile=$_POST['user_mobile'];

$insertquery="update user set user_password='$password' where user_mobile1='$user_mobile' OR user_mobile2='$user_mobile' OR user_email='$user_mobile' ";

$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}
}
?>
