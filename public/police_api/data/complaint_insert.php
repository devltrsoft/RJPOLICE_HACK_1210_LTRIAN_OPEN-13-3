<?php

include('../conn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$complaint_type_id=$_POST['complaint_type_id'];
$complaint_subject=$_POST['complaint_subject'];
$complaint_description=$_POST['complaint_description'];
$complaint_against=$_POST['complaint_against'];
$incident_date=$_POST['incident_date'];
//$status_id=$_POST['status_id'];
$station_id=$_POST['station_id'];
$user_id=$_POST['user_id'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
//$complaint_fir_id=$_POST['complaint_fir_id'];
$complaint_location=$_POST['complaint_location'];
$complaint_fir_id='1';
$status_id="1";

if($complaint_type_id==""){
    $complaint_type_id="1";
}
if($user_id==""){
    $user_id="1";
}
if($station_id==""){
    $station_id="1";
}



$insertquery="INSERT INTO complaint(complaint_type_id,complaint_subject,complaint_description,complaint_against,incident_date,status_id, user_id,complaint_fir_id, station_id, latitude, longitude, complaint_location)VALUES('$complaint_type_id','$complaint_subject','$complaint_description','$complaint_against','$incident_date','$status_id','$user_id','$complaint_fir_id', $station_id, '$latitude', '$longitude', '$complaint_location')";
$result = mysqli_query($conn, $insertquery);

if ($result) {
    $data=array();
    
    $query="SELECT complaint_id FROM complaint ORDER BY complaint_id DESC LIMIT 1";
    $r = mysqli_query($conn, $query);
    if(mysqli_num_rows($r)==1){
        $i=0;
        while($row=mysqli_fetch_assoc($r)){
           // echo $row['complaint_id'];  
            //$data[$i]=$row;

            $data['complaint_data'] = $row; 
            $i++;      
    
        }
        $data['message']="success";
    }
    
} else {
    $data['message']="error";
    
}
}
echo json_encode($data,JSON_PRETTY_PRINT);
?>


