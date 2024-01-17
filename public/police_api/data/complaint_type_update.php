<?php
require'conn.php';
$complaint_type_id=$_POST['complaint_type_id'];
$complaint_type_name=$_POST['complaint_type_name'];
$sql="UPDATE complaint_category SET complaint_type_name='$complaint_type_name'WHERE complaint_type_id='$complaint_type_id'";
$result=mysqli_query($conn,$sql);
if($sql)
{
    echo"update sucessfully";
}
else
{
    echo"update not sucessfully".mysqli_connect_error($conn);
}


?>
