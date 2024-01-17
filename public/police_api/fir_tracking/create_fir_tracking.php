<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $fir_id = $_POST['fir_id'];
        $tracking_date = $_POST['tracking_date'];
        $description = $_POST['description'];
        $registered_police = $_POST['registered_police'];
        
        $c = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `fir_tracking`(`fir_id`, `tracking_date`, `description`, `Registered_police`) VALUES ('$fir_id','$tracking_date','$description','$registered_police')";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
