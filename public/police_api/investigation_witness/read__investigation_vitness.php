<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();


$sql="select * from investigation_witness su, investigation i, state s, city cc, country c, district d where su.state_id=s.state_id and su.district_id=d.district_id and su.city_id=cc.city_id and su.country_id=c.country_id and su.fir_id=i.fir_id";

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