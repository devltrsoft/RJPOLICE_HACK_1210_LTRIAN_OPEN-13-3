<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$position_name=$_POST['position_name'];
$insertquery="INSERT INTO position(position_name)VALUES('$position_name')";
$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "result success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}
}
?>
