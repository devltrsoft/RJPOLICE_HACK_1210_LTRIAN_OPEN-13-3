<?php 

include("..//conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $country_name=$_POST['country_name'];

        $sql = "INSERT INTO country (`country_name`) VALUES ('$country_name')";
        
        if(mysqli_query($link, $sql)){
           echo 'success';
        } else {
            echo"fail";
        
        }
}
?>