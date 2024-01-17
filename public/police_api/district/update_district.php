<?php 

include("..//conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $district_id=$_POST['district_id'];
        $district_name=$_POST['district_name'];
        $state_id= $_POST['state_id'];

        
        

        $sql = "UPDATE district
                SET
                state_id='$state_id',
                district_name='$district_name'
                WHERE
                district_id='$district_id'";
        
        if(mysqli_query($link, $sql)){
           echo"success";
        } else {
           echo"fail";
        }
    }    

?>