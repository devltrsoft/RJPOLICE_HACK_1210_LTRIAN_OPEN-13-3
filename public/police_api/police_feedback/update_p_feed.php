<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $police_feedback_id=$_POST['police_feedback_id'];
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

        $sql = "UPDATE `police_feedback` SET `overall_satisfaction`='$overall_satisfaction',`usability_navigation`='$usability_navigation',`training_support`='$training_support',`alert_notification`='$alert_notification',`security_privacy`='$security_privacy',`relevance_info`='$relevance_info]',`average_prating`='$average_prating',`updated_at`='$c',`police_id`='$police_id' WHERE `police_feedback_id`='$police_feedback_id'";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
