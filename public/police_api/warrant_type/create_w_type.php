<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        
        $warrant_type_name = $_POST['warrant_type_name'];
        
        $c = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `warrant_type` (`warrant_type_name`) VALUES ('$warrant_type_name')";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
