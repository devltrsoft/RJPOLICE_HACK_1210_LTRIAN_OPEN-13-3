<?php 
include("..//conn.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $post_id = $_POST['post_id']; 
    
   
    $query = "SELECT `post_likes` FROM post WHERE post_id='$post_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentLikes = $row['post_likes'];

        
        $postLikes = $currentLikes + 1;

        
        $updateQuery = "UPDATE post SET `post_likes`='$postLikes' WHERE post_id='$post_id'";

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
