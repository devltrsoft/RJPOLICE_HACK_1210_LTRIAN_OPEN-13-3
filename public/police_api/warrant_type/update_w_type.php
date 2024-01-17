<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $warrant_type_id = $_POST['warrant_type_id'];
        $warrant_type_name = $_POST['warrant_type_name'];
        
        $c = date('Y-m-d H:i:s');

        $sql = "UPDATE `warrant_type` SET`warrant_type_name`='$warrant_type_name',`updated_at`='$c' WHERE  `warrant_type_id`='$warrant_type_id'";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
