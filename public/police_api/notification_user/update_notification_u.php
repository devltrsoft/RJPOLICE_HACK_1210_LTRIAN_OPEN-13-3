<?php 

include("..//conn.php");
// Check connection
if($link === false){
    die("ERROR: Could not connect   . " . mysqli_connect_error());
}else{
    // echo'Login';

    if($_SERVER["REQUEST_METHOD"] == "POST"){


        $notification_user_id = $_POST['notification_user_id'];
        $notification_id = $_POST['notification_id'];
        $user_id = $_POST['user_id'];

        // $sql = "UPDATE 'state'
        // SET
        // state_id='$state_id';
        // country_id='$country_id',
        // state_name= '$state_name',
        // WHERE
        // state_id='$state_id'";

        $sql = "UPDATE notification_user
                SET
               
                notification_id ='$notification_id',
                user_id ='$user_id'
                
                WHERE
                notification_user_id='$notification_user_id'";
        
        if(mysqli_query($link, $sql)){
            $result["Success"] = "1";
            $result["message"] = "Success";
            echo json_encode($result);
            mysqli_close($link);
        } else {
            $result["Success"] = "0";
            $result["message"] = "error";
            echo json_encode($result);
            mysqli_close($link);
        }
    }    
}
?>