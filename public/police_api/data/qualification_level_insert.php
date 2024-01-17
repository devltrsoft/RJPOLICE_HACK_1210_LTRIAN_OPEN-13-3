<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$qualification_level_name=$_POST['qualification_level_name'];
$insertquery="INSERT INTO qualification_level(qualification_level_name)VALUES('$qualification_level_name')";
$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "result success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}
}
?>
