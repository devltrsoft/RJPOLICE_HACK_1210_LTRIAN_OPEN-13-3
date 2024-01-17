<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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


$sql="INSERT INTO `investigation`(`investigation_start_date`, `investigation_end_date`, `location`, `complaint_id`, `incedant_reporting`, `evidance_property`, `investigation_description`) VALUES ('$start','$end','$location', '$complaint_id', '$incedant_reporting','$evidance_property','$investigation_description')";
//echo $sql;
//echo "link=".$link;
if(mysqli_query($conn,$sql)){

$data=array();
    
$query="SELECT investigation_id, fir_id FROM investigation ORDER BY investigation_id DESC LIMIT 1";
$r = mysqli_query($conn, $query);
if(mysqli_num_rows($r)==1){
    $i=0;
    while($row=mysqli_fetch_assoc($r)){
       // echo $row['complaint_id'];  
        //$data[$i]=$row;

        $data['investigation_data'] = $row; 
        $i++;      

    }
    $data['message']="success";
}

} else {
$data['message']="error";

}
}



?>