<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $news_category_id = $_POST['news_category_id'];
        $news_category_name= $_POST['news_category_name'];
        
        
        $sql = "UPDATE news_category
                SET
                news_category_name='$news_category_name'
                WHERE
                news_category_id='$news_category_id'";
        
        if(mysqli_query($link, $sql)){
           echo"success";
        } else {
            echo"failed";
        
    }    
}
?>
