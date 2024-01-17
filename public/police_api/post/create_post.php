<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $user_id = $_POST['user_id'];
        $photo_video = $_POST['photo_video'];
        $subject = $_POST['subject'];
        $description = $_POST['description'];
        //$post_likes ="0";
        
        
        $c = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `post`(`user_id`, `photo_video`, `subject`, `description`) VALUES ('$user_id','$photo_video','$subject','$description')";

        if(mysqli_query($link, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
