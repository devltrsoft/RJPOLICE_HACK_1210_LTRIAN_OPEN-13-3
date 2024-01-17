<?php
include("../conn.php");

$fir_id=$_POST['fir_id'];

$complaint_id=$_POST['complaint_id'];
$start=$_POST['investigation_start_date'];
$end=$_POST['investigation_end_date'];
$location=$_POST['location'];
$incedant_reporting=$_POST['incedant_reporting'];
$evidance_property=$_POST['evidance_property'];
$investigation_description=$_POST['investigation_description'];

if($complaint_id=="")
{
    $complaint_id="1";
}
$c=date('Y-m-d H:i:s');

$sql="UPDATE `investigation` SET `investigation_start_date`='$start',`investigation_end_date`='$end',`location`='$location',`complaint_id`='$complaint_id',`incedant_reporting`='$incedant_reporting',`evidance_property`='$evidance_property',`investigation_description`='$investigation_description', `updated_at`='$c' WHERE `investigation_id`='$fir_id'";
//echo $sql;
//echo "link=".$link;
if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}




?>