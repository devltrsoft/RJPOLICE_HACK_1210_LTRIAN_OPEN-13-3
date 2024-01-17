<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $warrant_id=$_POST['warrant_id'];
        $fir_id = $_POST['fir_id'];
        $warrant_type_id = $_POST['warrant_type_id'];
        $warrant_against = $_POST['warrant_against'];
        $date_issued = $_POST['date_issued'];
        $description = $_POST['description'];
        $action = $_POST['action'];
        $court_name = $_POST['court_name'];
        $issuing_authority = $_POST['issuing_authority'];
        
        $c = date('Y-m-d H:i:s');

        $sql = "UPDATE `warrant` SET `fir_id`='$fir_id',`warrant_type_id`='$warrant_type_id',`warrant_against`='$warrant_against',`date_issued`='$date_issued',`description`='$description',`action`='$action',`court_name`='$court_name',`issuing_authority`='$issuing_authority',`updated_at`='$c' WHERE `warrant_id`='$warrant_id'";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
