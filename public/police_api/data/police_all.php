<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();


$sql="select * from police p, position pp where p.position_id=pp.position_id";
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