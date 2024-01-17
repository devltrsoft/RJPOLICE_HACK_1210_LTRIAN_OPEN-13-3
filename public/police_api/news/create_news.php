<?php 

include("..//conn.php");

// Check connection

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $news_category_id = $_POST['news_category_id'];
        $station_id = $_POST['station_id'];
        $news_title = $_POST['news_title'];
        $news_description = $_POST['news_description'];
        $news_date = $_POST['news_date'];
        $like =0;

        $sql = "INSERT INTO `news` ( `news_category_id`, `news_title`, `station_id`, `news_description`, `news_date` , `like`) VALUES ('$news_category_id', '$news_title', '$station_id', '$news_description', '$news_date', $like)";

        if(mysqli_query($conn, $sql)){
           echo"success";
    
        } else {
           echo"error";
        }
    }    

?>
