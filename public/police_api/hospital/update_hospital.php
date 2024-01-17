<?php 

include("..//conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $hospital_id=$_POST['hospital_id'];
        $hospital_name = $_POST['hospital_name'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        
        
        $c = date('Y-m-d H:i:s');
        $sql = "UPDATE `hospital` SET `hospital_name`='$hospital_name',`latitude`='$latitude',`longitude`='$longitude',`updated_at`='$c' WHERE `hospital_id`='$hospital_id'";

        if(mysqli_query($conn, $sql)){
           echo"success";
    
        } else {
           echo"error";
        }
    }    

?>
