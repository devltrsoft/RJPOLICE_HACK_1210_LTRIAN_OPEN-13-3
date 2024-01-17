<?php
include('conn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$complaint_id=$_POST['complaint_id'];
$complaint_type_id=$_POST['complaint_type_id'];
$complaint_subject=$_POST['complaint_subject'];
$complaint_description=$_POST['complaint_description'];
$complaint_against=$_POST['complaint_against'];
$incident_date=$_POST['incident_date'];
$user_id=$_POST['user_id'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$complaint_location=$_POST['complaint_location'];
$station_id=$_POST['station_id'];


    $complaint_fir_id='1';
    $status_id="1";


if($complaint_type_id==""){
    $complaint_type_id="1";
}

if($user_id==""){
    $user_id="1";
}
$c = date('Y-m-d H:i:s');
$sql="UPDATE complaint SET complaint_type_id='$complaint_type_id',complaint_subject='$complaint_subject',complaint_description='$complaint_description',complaint_against='$complaint_against',incident_date='$incident_date',status_id='$status_id',user_id='$user_id',latitude='$latitude',longitude='$longitude', station_id='$station_id', updated_at='$c' WHERE complaint_id='$complaint_id'";
$result=mysqli_query($conn,$sql);
if($sql)
{
    echo"success";
}
else
{
    echo"update not sucessfully".mysqli_connect_error($conn);
}
}


?>

