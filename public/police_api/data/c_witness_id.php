<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $complaint_witness_id=$_POST['complaint_witness_id'];

$sql = "SELECT * FROM complaint c
        INNER JOIN complaint_category ct ON c.complaint_type_id = ct.complaint_type_id
        INNER JOIN complaint_witness u ON u.complaint_id = c.complaint_id
        INNER JOIN city cc ON cc.city_id = u.city_id
        INNER JOIN country co ON co.country_id = u.country_id
        INNER JOIN state ss ON ss.state_id = u.state_id
        INNER JOIN district di ON di.district_id = u.district_id
        INNER JOIN complaint_fir cf ON cf.complaint_fir_id = c.complaint_fir_id
        INNER JOIN status s ON c.status_id = s.status_id
        Where u.complaint_witness_id='$complaint_witness_id'
        ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $i=0;
    while($row=mysqli_fetch_assoc($result)){
        $data[$i]=$row;
        $i++;
       // $userPhoto = $row['_photo'];
       
        
    }
    //print_r($data);
    echo json_encode($data,JSON_PRETTY_PRINT);
}
//$f="inputfiles/";
//echo "<img src='inputfiles/$userPhoto' alt='User Photo'>";

}


?>

