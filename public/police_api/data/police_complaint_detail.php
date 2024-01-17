<?php
//used to display all complaint detail to police based on police_id

include("../conn.php");

header('Content-Type: application/json');
$data=array();

$police_id="2";
$sql = "SELECT * 
        FROM police_complaint pc 
        JOIN police p ON pc.police_id = p.police_id 
        JOIN complaint c ON pc.complaint_id = c.complaint_id 
        JOIN user u ON u.user_id = c.user_id 
        JOIN status s ON c.status_id = s.status_id 
        LEFT JOIN complaint_witness cw ON cw.complaint_id = c.complaint_id
        LEFT JOIN complaint_victim cv ON cv.complaint_id = c.complaint_id 
        LEFT JOIN complaint_suspect cs ON cs.complaint_id = c.complaint_id 
        JOIN complaint_category ct ON c.complaint_type_id = ct.complaint_type_id 
        LEFT JOIN complaint_photo cp ON cp.complaint_id = c.complaint_id
        JOIN city cc ON u.city_id = cc.city_id
        JOIN district dd ON u.district_id = dd.district_id
        JOIN state ss ON u.state_id = ss.state_id
        JOIN country co ON u.country_id = co.country_id

        WHERE p.police_id = '$police_id'
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


