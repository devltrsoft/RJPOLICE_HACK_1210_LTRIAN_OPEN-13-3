<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $tracking_id=$_POST['fir_tracking_id'];
        $fir_id = $_POST['fir_id'];
        $tracking_date = $_POST['tracking_date'];
        $description = $_POST['description'];
        $registered_police = $_POST['registered_police'];
        
       
        $c = date('Y-m-d H:i:s');

        $sql = "UPDATE `fir_tracking` SET `fir_id`='$fir_id',`tracking_date`='$tracking_date',`description`='$description',`registered_police`='$registered_police',`updated_at`='$c' WHERE `tracking_id`='$tracking_id'";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
