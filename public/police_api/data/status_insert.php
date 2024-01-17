<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$status_name=$_POST['status_name'];

$insertquery="INSERT INTO status(status_name)VALUES('$status_name')";

$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}
}
?>
