<?php 

include("..//conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $country_id= $_POST['country_id'];
        $country_name=$_POST['country_name'];
        
        
        $sql = "UPDATE country
        SET
        country_id='$country_id',
        country_name= '$country_name'
        WHERE
        country_id='$country_id'";

        
        if(mysqli_query($link, $sql)){
           echo "success";
        } else {
            echo "Fail";
        }
    }    

?>