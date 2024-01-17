<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $id=$_POST['police_id'];


//, GROUP_CONCAT(DISTINCT p.police_fname) AS assigned_police
$sql = "SELECT * 
        FROM police_complaint pc 
        JOIN police p ON pc.police_id = p.police_id 
        JOIN complaint c ON pc.complaint_id = c.complaint_id 
        JOIN status s ON c.status_id = s.status_id 
        JOIN complaint_category ct ON c.complaint_type_id = ct.complaint_type_id
        JOIN complaint_fir cf ON cf.complaint_fir_id = c.complaint_fir_id
        JOIN user u ON u.user_id = c.user_id
        JOIN city cc ON u.city_id = cc.city_id
        JOIN district dd ON u.district_id = dd.district_id
        JOIN state ss ON u.state_id = ss.state_id
        JOIN country co ON u.country_id = co.country_id 
        LEFT JOIN complaint_photo cp ON cp.complaint_id = c.complaint_id
        LEFT JOIN complaint_witness cw ON cw.complaint_id = c.complaint_id
        LEFT JOIN complaint_victim cv ON cv.complaint_id = c.complaint_id 
        LEFT JOIN complaint_suspect cs ON cs.complaint_id = c.complaint_id 
        LEFT JOIN investigation ii ON c.complaint_id = ii.complaint_id
        WHERE  
        pc.complaint_id IN (
        SELECT 
            pc_inner.complaint_id 
        FROM 
            police_complaint pc_inner 
        WHERE 
            pc_inner.police_id = '$id'
    )

        
        ";//WHERE p.police_id = '1'
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