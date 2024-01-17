<?php
include('../conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$complaint_fir_name=$_POST['complaint_fir_name'];
$insertquery="INSERT INTO complaint_fir(complaint_fir_name)VALUES('$complaint_fir_name')";
$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "success";
} else {
    echo "failed";
}
}
?>
