<?php 

include("..//conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $state_id= $_POST['state_id'];
        $state_name=$_POST['state_name'];
        $country_id=$_POST['country_id'];

        

        $sql = "UPDATE state
                SET
                country_id='$country_id',
                state_name='$state_name'
                WHERE
                state_id='$state_id'";
        
        if(mysqli_query($link, $sql)){
           echo"success";
        } else {
           echo"fail";
        }
       
}
?>