<?php 

include("..//conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $city_id=$_POST['city_id'];
        $city_name=$_POST['city_name'];
        $district_id= $_POST['district_id'];

        
       

        $sql = "UPDATE city
                SET
                district_id='$district_id',
                city_name='$city_name'
                WHERE
                city_id='$city_id'";
        
        if(mysqli_query($link, $sql)){
          echo "success";
        } else {
           echo"error";
        
    }    
}
?>