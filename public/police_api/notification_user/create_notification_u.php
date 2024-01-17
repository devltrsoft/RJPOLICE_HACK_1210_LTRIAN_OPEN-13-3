<?php 

include("..//conn.php");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $notification_user_id = $_POST['notification_user_id'];
        $notification_id = $_POST['notification_id'];
        $user_id = $_POST['user_id'];


        $sql = "INSERT INTO `notification_user` (`notification_user_id`, `notification_id`, `user_id`) VALUES (NULL, ' $notification_id', '$user_id ')";

        if(mysqli_query($link, $sql)){
            $result["Success"] = "1";
            $result["message"] = "Success";
            echo json_encode($result);
            mysqli_close($link);
        } else {
            $result["Success"] = "0";
            $result["message"] = "Error: " . mysqli_error($link);
            echo json_encode($result);
            mysqli_close($link);
        }
    }    
}
?>
