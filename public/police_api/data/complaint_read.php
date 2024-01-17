<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $complaint_id=$_POST['complaint_id'];

$sql="select * from complaint c, complaint_category ct, user u, complaint_fir cf, status s where c.complaint_type_id=ct.complaint_type_id and c.user_id=u.user_id and c.status_id=s.status_id and c.complaint_id='$complaint_id'";
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