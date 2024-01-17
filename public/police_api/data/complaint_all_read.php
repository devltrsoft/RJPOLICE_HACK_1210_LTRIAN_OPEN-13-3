<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $complaint_id=$_POST['complaint_id'];


$sql = "SELECT * FROM complaint c
        INNER JOIN complaint_category ct ON c.complaint_type_id = ct.complaint_type_id
        INNER JOIN complaint_suspect u ON u.complaint_id = c.complaint_id
        INNER JOIN city cc ON cc.city_id = u.city_id
        INNER JOIN country co ON co.country_id = u.country_id
        INNER JOIN state ss ON ss.state_id = u.state_id
        INNER JOIN district di ON di.district_id = u.district_id
        INNER JOIN complaint_fir cf ON cf.complaint_fir_id = c.complaint_fir_id
        INNER JOIN status s ON c.status_id = s.status_id
        WHERE c.complaint_id = '$complaint_id'";

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