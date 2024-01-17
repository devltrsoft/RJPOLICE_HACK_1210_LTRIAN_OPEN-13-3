<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();


$sql="select * from criminal_complaint cc, investigation i,criminal_detail cd, complaint c where cc.fir_id=i.fir_id and cc.criminal_id=cd.criminal_id and i.complaint_id=c.complaint_id";
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