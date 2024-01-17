<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();


 $sql="select * from criminal_detail cd, country c, state s, district d, city cc where cd.country_id=c.country_id and cd.state_id=s.state_id and cd.district_id=d.district_id and cd.city_id=cc.city_id";

//$sql="select * from feedback_category";
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