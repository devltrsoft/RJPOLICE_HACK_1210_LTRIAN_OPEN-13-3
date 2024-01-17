<?php 

include("..//conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $language_name = $_POST['language_name'];
        $short_key = $_POST['short_key'];
        
        

        $sql = "INSERT INTO `language`(`language_name`, `short_key`) VALUES ('$language_name','$short_key')";

        if(mysqli_query($conn, $sql)){
           echo"success";
    
        } else {
           echo"error";
        }
    }    

?>
