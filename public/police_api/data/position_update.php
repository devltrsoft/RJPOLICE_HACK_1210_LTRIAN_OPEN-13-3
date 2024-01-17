<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$position_id=$_POST['position_id'];
$position_name=$_POST['position_name'];
$sql="UPDATE position SET position_name='$position_name' WHERE police_id='$police_id'";
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