<?php 

include("..//conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $language_id=$_POST['language_id'];
        $language_name = $_POST['language_name'];
        $short_key = $_POST['short_key'];
        
        $c = date('Y-m-d H:i:s');

        $sql = "UPDATE language SET `language_name`='$language_name', `short_key`='$short_key', `updated_at`='$c' where language_id='$language_id'";

        if(mysqli_query($conn, $sql)){
           echo"success";
    
        } else {
           echo"error";
        }
    }    

?>
