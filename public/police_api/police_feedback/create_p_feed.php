<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $police_id = $_POST['police_id'];
        $overall_satisfaction = $_POST['overall_satisfaction'];
        $usability_navigation = $_POST['usability_navigation'];
        $training_support = $_POST['training_support'];
        $alert_notification = $_POST['alert_notification'];
        $security_privacy = $_POST['security_privacy'];
        $relevance_info = $_POST['relevance_info'];
        $average_prating = $_POST['average_prating'];
        
        if($police_id==""){
                $police_id="1";
        }
        
        
        $c = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `police_feedback`(`overall_satisfaction`, `usability_navigation`, `training_support`, `alert_notification`, `security_privacy`, `relevance_info`, `average_prating`, `police_id`) VALUES ('$overall_satisfaction','$usability_navigation','$training_support','$alert_notification','$security_privacy','$relevance_info','$average_prating','$police_id')";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
