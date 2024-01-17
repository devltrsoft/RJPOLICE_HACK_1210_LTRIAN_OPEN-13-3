<?php 

include("..//conn.php");
// Check connection
if($link === false){
    die("ERROR: Could not connect   . " . mysqli_connect_error());
}else{
    // echo'Login';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $news_id = $_POST['news_id'];
        $news_category_id = $_POST['news_category_id'];
        $station_id = $_POST['station_id'];
        $news_title = $_POST['news_title'];
        $news_description = $_POST['news_description'];
        $news_date = $_POST['news_date'];
        $like = $_POST['like'];
        
        

        $sql = "UPDATE news
                SET
                news_category_id ='$news_category_id',
                station_id ='$station_id',
                news_title ='$news_title',
                news_description ='$news_description',
                news_date ='$news_date',
                like='$like'
                WHERE
                news_id='$news_id'";
        
        if(mysqli_query($link, $sql)){
           echo'success';
        } else {
            echo'fail';
        }
    }    
}
?>