<?php 

include("../conn.php");
// Check connection


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $notification_id = $_POST['notification_id'];
        $notification_title = $_POST['notification_title'];
        $notification_station_id = $_POST['notification_station_id'];
        $notification_description = $_POST['notification_description'];
        //$notification_contact = $_POST['notification_contact'];


        $sql = "UPDATE notification
                SET
                notification_title ='$notification_title',
                notification_station_id ='$notification_station_id',
                notification_description ='$notification_description'
                WHERE
                notification_id='$notification_id'";
        
        if(mysqli_query($conn, $sql)){
            echo"success";
        } else {
            echo"failed";
        }
    }    

?>