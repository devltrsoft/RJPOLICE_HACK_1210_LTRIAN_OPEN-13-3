<?php 

include("../conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $notification_title = $_POST['notification_title'];
        $notification_station_id = $_POST['notification_station_id'];
        $notification_description = $_POST['notification_description'];
        

        if($notification_station_id==""){
            $notification_station_id=1;
        }

        $sql = "INSERT INTO `notification` ( `notification_title`, `notification_station_id`, `notification_description`) VALUES ('$notification_title', '$notification_station_id', '$notification_description')";

        if(mysqli_query($conn, $sql)){
           echo"success";
        } else {
           echo"failed";
        }
    }    
?>
