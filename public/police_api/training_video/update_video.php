<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $video_id = $_POST['video_id'];
        $video_path = $_POST['video_path'];
        $video_subject = $_POST['video_subject'];
        $video_description = $_POST['video_description'];
        $station_id = $_POST['station_id'];

        if($station_id==""){
            $station_id="1";
        }
        $c = date('Y-m-d H:i:s');

        $sql = "UPDATE `training_video` SET `video_path`='$video_path',`video_subject`='$video_subject',`video_description`='$video_description',`station_id`='$station_id',`updated_at`='$c' WHERE `video_id`='$id'";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
