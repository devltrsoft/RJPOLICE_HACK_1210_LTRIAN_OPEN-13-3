<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $assign_id=$_POST['assign_id'];
        $police_id = $_POST['police_id'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $start_time = $_POST['start_time'];
        $area_name = $_POST['area_name'];
        
        if($police_id==""){
                $police_id="1";
        }
        
        $c = date('Y-m-d H:i:s');

        $sql = "UPDATE `duty_assign` SET `police_id`='$police_id',`start_date`='$start_date',`end_date`='$end_date',`start_time`='$start_time',`area_name`='$area_name',`updated_at`='$c' WHERE `assign_id`='$assign_id'";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
