<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();


$sql="select * from complaint_witness cp, complaint c, country cc, state s, district d, city ci where cp.complaint_id=c.complaint_id and cp.country_id=cc.country_id and cp.state_id=s.state_id and cp.district_id=d.district_id and cp.city_id=ci.city_id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $i=0;
    while($row=mysqli_fetch_assoc($result)){
        $data[$i]=$row;
        $i++;
        

    }
    //print_r($data);
    echo json_encode($data,JSON_PRETTY_PRINT);
}







?>