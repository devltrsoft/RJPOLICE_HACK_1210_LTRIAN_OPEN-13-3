<?php 

include("..//conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $district_name=$_POST['district_name'];
        $state_id= $_POST['state_id'];

        $sql = "INSERT INTO district ( state_id, district_name) VALUES ('$state_id', '$district_name')";

        if(mysqli_query($link, $sql)){
            echo"success";
            mysqli_close($link);
        } else {
           echo"fail";
        }
    }    

?>