<?php 

include("..//conn.php");

// Check connection


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $news_photos_id = $_POST['news_photos_id'];
        $news_id = $_POST['news_id'];
        $news_photo_path = $_POST['news_photo_path'];
        
        $sql = "UPDATE news_photos
                SET
                news_id ='$news_id',
                news_photo_path ='$news_photo_path'
                WHERE
                news_photos_id='$news_photos_id'";
        
        if(mysqli_query($link, $sql)){
           echo"success";
        } else {
           
        }
    }    

?>
