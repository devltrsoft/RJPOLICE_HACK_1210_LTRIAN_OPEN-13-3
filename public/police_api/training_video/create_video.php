<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //$video_path = $_POST['video'];
        $video_subject = $_POST['video_subject'];
        $video_description = $_POST['video_description'];
        $station_id = $_POST['station_id'];

        if($station_id==""){
            $station_id="1";
        }
        
        $c = date('Y-m-d H:i:s');

       

$upload_dir = '../inputfiles/'; // Directory to store uploaded videos


    
        $video = $_FILES['video'];

        if ($video['error'] === UPLOAD_ERR_OK) {
            $video_ex = pathinfo($video['name'], PATHINFO_EXTENSION);
            $video_ex_lc = strtolower($video_ex);
            $allowed_exs = array("mp4", "webm", "avi", "flv"); // Add more allowed video formats as needed

            if (in_array($video_ex_lc, $allowed_exs)) {
                $new_filename = uniqid("video-", true) . '.' . $video_ex_lc;
                $upload_path = $upload_dir . $new_filename;

                if (move_uploaded_file($video['tmp_name'], $upload_path)) {
                    
                   // echo "Video uploaded successfully.";
                   $sql = "INSERT INTO `training_video`(`video_path`, `video_subject`, `video_description`, `station_id`) VALUES ('$new_filename','$video_subject','$video_description','$station_id')";
if(mysqli_query($conn,$sql)){
    echo'success';
}
else{
    echo'error';
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
    
    




        
        // $video_path = $_POST['video_path'];
        // $video_subject = $_POST['video_subject'];
        // $video_description = $_POST['video_description'];
        // $station_id = $_POST['station_id'];

        // if($station_id==""){
        //     $station_id="1";
        // }
        
        // $c = date('Y-m-d H:i:s');

        // $sql = "INSERT INTO `training_video`(`video_path`, `video_subject`, `video_description`, `station_id`) VALUES ('$video_path','$video_subject','$video_description','$station_id')";

        // if(mysqli_query($conn, $sql)){
        //   echo "success";
        // } else {
        //     echo "Fail";
        // }
    }    

?>
