<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$id=$_POST['police_id'];

$sql="select * from police p, position pp, country cc, state s, district d, city ci where p.position_id=pp.position_id and p.country_id=cc.country_id and p.state_id=s.state_id and p.district_id=d.district_id and p.city_id=ci.city_id and p.police_id='$id'";
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

}



?>