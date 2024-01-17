<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $post_id = $_POST['post_id'];
        $user_id = $_POST['user_id'];
        $photo_video = $_POST['photo_video'];
        $subject = $_POST['subject'];
        $description = $_POST['description'];
        //$post_likes ="0";
        
        $c = date('Y-m-d H:i:s');

        $sql = "UPDATE `post` SET `user_id`='$user_id',`photo_video`='$photo_video',`subject`='$subject',`description`='$description',`updated_at`='$c' WHERE `post_id`='$post_id'";

        if(mysqli_query($link, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
