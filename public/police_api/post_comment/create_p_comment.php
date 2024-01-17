<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $post_id = $_POST['post_id'];
        $comment_user_id = $_POST['comment_user_id'];
        $description = $_POST['description'];
        
        if($comment_user_id==""){
                $comment_user_id="1";
        }
        
        
        $c = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `post_comment`(`post_id`, `comment_user_id`, `comment_description`) VALUES ('$post_id','$comment_user_id','$description')";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
