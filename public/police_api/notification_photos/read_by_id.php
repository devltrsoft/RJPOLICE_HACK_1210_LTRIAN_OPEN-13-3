<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $notification_id= $_POST['notification_id'];

$sql = "SELECT * 
        FROM notification n 
        LEFT JOIN notification_photos np ON n.notification_id = np.notification_id and n.notification_id='$notification_id'
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



}

?>




    
       
    


