<?php
include('../conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$complaint_fir_id=$_POST['complaint_fir_id'];
$complaint_fir_name=$_POST['complaint_fir_name'];
$sql="UPDATE complaint_fir SET complaint_fir_name='$complaint_fir_name' WHERE complaint_fir_id='$complaint_fir_id'";
$result=mysqli_query($conn,$sql);
if($sql)
{
	echo"sucess";
}
else
{
	echo"error";
}
}

?>
