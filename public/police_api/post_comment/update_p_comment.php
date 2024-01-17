<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $comment_id = $_POST['comment_id'];
        $post_id = $_POST['post_id'];
        $comment_user_id = $_POST['comment_user_id'];
        $description = $_POST['description'];
        
        
        $c = date('Y-m-d H:i:s');

        $sql = "UPDATE `post_comment` SET `post_id`='$post_id',`comment_user_id`='$comment_user_id',`description`='$description',`updated_at`='$c' WHERE `comment_id`='$comment_id'";

        if(mysqli_query($link, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
