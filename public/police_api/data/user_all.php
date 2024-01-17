<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();


$sql="select * from user u
        INNER JOIN city cc ON cc.city_id = u.city_id
        INNER JOIN country co ON co.country_id = u.country_id
        INNER JOIN state ss ON ss.state_id = u.state_id
        INNER JOIN district di ON di.district_id = u.district_id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $i=0;
    while($row=mysqli_fetch_assoc($result)){
        $data[$i]=$row;
        $i++;
        $userPhoto = $row['user_photo'];
       
        
    }
    //print_r($data);
    echo json_encode($data,JSON_PRETTY_PRINT);
}
$f="inputfiles/";
//echo "<img src='inputfiles/$userPhoto' alt='User Photo'>";




?>

