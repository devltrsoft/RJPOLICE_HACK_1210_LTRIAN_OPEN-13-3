<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$police_complaint_id=$_POST['police_complaint_id'];
$police_id=$_POST['police_id'];
$complaint_id=$_POST['complaint_id'];
$c = date('Y-m-d H:i:s');
$sql="UPDATE police_complaint SET police_id='$police_id',complaint_id='$complaint_id'WHERE police_complaint_id='$police_complaint_id'";
$result=mysqli_query($conn,$sql);
if($sql)
{
	echo"update sucessfully";
}
else
{
	echo"update not sucessfully".mysqli_connect_error($conn);
}

}
?>
