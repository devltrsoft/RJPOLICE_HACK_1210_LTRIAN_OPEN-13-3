<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $post_id = $_POST['post_id'];
       
        $c = date('Y-m-d H:i:s');

        $sql = "delete from post where post_id='$post_id'";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
