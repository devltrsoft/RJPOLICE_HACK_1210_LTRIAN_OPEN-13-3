<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$status_id=$_POST['status_id'];
$status_name=$_POST['status_name'];
$sql="UPDATE status SET status_name='$status_name' WHERE status_id='$status_id'";
$result=mysqli_query($conn,$sql);
if($sql)
{
	echo"sucess";
}
else
{
	echo"update not sucessfully".mysqli_connect_error($conn);
}
}

?>