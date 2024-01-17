<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $news_category_name = $_POST['news_category_name'];
        

        $sql = "INSERT INTO `news_category` (`news_category_id`, `news_category_name`) VALUES (NULL, '$news_category_name')";

        if(mysqli_query($link, $sql)){
           echo"success";
        } else {
           echo"failed";
        }
    }    

?>
