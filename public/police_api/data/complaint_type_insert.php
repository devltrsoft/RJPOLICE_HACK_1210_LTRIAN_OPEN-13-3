<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$complaint_type_name=$_POST['complaint_type_name'];
$insertquery="INSERT INTO complaint_category(complaint_type_name)VALUES('$complaint_type_name')";
$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}

}
?>
