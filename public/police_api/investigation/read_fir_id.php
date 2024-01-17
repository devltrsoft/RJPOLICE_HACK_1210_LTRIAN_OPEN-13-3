<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id=$_POST['fir_id'];

$sql="select * from investigation i, complaint c, complaint_category ct, user u, investigation_suspect iss, investigation_witness iw, victim v, complaint_fir cf, status s where c.complaint_type_id=ct.complaint_type_id and c.user_id=u.user_id and c.status_id=s.status_id and i.complaint_id=c.complaint_id and i.fir_id=iss.fir_id and i.fir_id=iw.fir_id and i.fir_id=v.fir_id and i.fir_id='$id' ";
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