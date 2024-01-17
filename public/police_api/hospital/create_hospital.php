<?php 

include("..//conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $hospital_name = $_POST['hospital_name'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        $c = date('Y-m-d H:i:s');
        

        $sql = "INSERT INTO `hospital`(`hospital_name`, `latitude`, `longitude`) VALUES ('$hospital_name','$latitude','$longitude')";

        if(mysqli_query($conn, $sql)){
           echo"success";
    
        } else {
           echo"error";
        }
    }    

?>
