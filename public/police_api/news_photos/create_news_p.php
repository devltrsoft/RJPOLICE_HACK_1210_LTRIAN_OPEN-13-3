<?php 

include("../conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $video = $_FILES['news_photos_path'];
        $news_id = $_POST['news_id'];
        //$news_photos_path = $_POST['news_photos_path'];
            if($news_id==""){
                $news_id="1";
            }

        if ($video['error'] === UPLOAD_ERR_OK) {
            $video_ex = pathinfo($video['name'], PATHINFO_EXTENSION);
            $video_ex_lc = strtolower($video_ex);
            $allowed_exs = array("mp4", "webm", "avi", "flv"); // Add more allowed video formats as needed

            if (in_array($video_ex_lc, $allowed_exs)) {
                $new_filename = uniqid("video-", true) . '.' . $video_ex_lc;
                $upload_path = $upload_dir . $new_filename;

                if (move_uploaded_file($video['tmp_name'], $upload_path)) {
                    
                   // echo "Video uploaded successfully.";
                   $sql = "INSERT INTO `news_photos` (`news_id`, `news_photo_path`) VALUES ( '$news_id', '$upload_path')";

                   if(mysqli_query($link, $sql)){
                      
                       echo"success";
                   } else {
                      echo"error";
                   }

                } else {
                   // echo "Error moving the uploaded file.";
                }
            } else {
               // echo "You can't upload files of this type.";
            }
        } else {
            //echo "Error uploading the video: " . $video['error'];
        }
       
    }    

?>
