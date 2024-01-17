<?php 
include("..//conn.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $news_id = $_POST['news_id']; 
    
   
    $query = "SELECT `like` FROM news WHERE news_id='$news_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentLikes = $row['like'];

        
        $newLikes = $currentLikes + 1;

        
        $updateQuery = "UPDATE news SET `like`='$newLikes' WHERE news_id='$news_id'";

        if(mysqli_query($conn, $updateQuery)){
            echo "success";
        } else {
            echo "Error";
        }
    } else {
        //echo "No results found for news with ID: $news_id";
    }
}    
?>
