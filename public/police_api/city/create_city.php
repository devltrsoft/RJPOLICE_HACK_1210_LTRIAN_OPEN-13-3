<?php 

include("..//conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $district_id = $_POST['district_id'];
        $city_name = $_POST['city_name'];
        
        $c = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `city` (`district_id`, `city_name`) VALUES ('$district_id', '$city_name')";

        if(mysqli_query($link, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
