<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

       
        $police_id = $_POST['police_id'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $start_time = $_POST['start_time'];
        $area_name = $_POST['area_name'];
       
        
        if($police_id==""){
                $police_id="1";
        }
        
        $c = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `duty_assign`(`police_id`, `start_date`, `end_date`, `start_time`, `area_name`) VALUES ('$police_id','$start_date','$end_date','$start_time','$area_name')";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
