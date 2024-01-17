<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$qualification_level_id=$_POST['qualification_level_id'];
$qualification_type_name=$_POST['qualification_level_name'];

$sql="UPDATE qualification_level SET qualification_level_name='$qualification_type_name' where qualification_level_id='$qualification_level_id'";
$result=mysqli_query($conn,$sql);
if($sql)
{
	echo"sucess";
}
else
{
	echo"failed";
}

}
?>