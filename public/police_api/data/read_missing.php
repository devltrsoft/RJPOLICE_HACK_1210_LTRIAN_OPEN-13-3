<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();


//select * from complaint where complaint_type_id='37'";

$sql="SELECT *
FROM complaint c
INNER JOIN complaint_category ct ON c.complaint_type_id = ct.complaint_type_id
INNER JOIN user u ON c.user_id = u.user_id
INNER JOIN complaint_fir cf ON cf.complaint_fir_id = c.complaint_fir_id
LEFT JOIN complaint_photo cp ON c.complaint_id = cp.complaint_id
LEFT JOIN complaint_victim cv ON cv.complaint_id = c.complaint_id
INNER JOIN status s ON c.status_id = s.status_id
INNER JOIN country cc ON cc.country_id = u.country_id
INNER JOIN state ss ON ss.state_id = u.state_id
INNER JOIN district dd ON dd.district_id = u.district_id
INNER JOIN city ci ON ci.city_id = u.city_id
WHERE ct.complaint_type_id='37';
";
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

