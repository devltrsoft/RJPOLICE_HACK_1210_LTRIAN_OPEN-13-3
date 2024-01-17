<?php 

include("..//conn.php");

    

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $state_id= $_POST['state_id'];
        $state_name=$_POST['state_name'];
        $country_id=$_POST['country_id'];

        $sql = "INSERT INTO `state` (`country_id`, `state_name`) VALUES ('$country_id', '$state_name')";
        
        if(mysqli_query($link, $sql)){
           echo"success";
        } else {
           echo"fail";
        }
    }    

?>