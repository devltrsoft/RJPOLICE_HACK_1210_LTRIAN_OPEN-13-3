<?php 

include("../conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $uploading_id = $_POST['uploading_id'];
        
        $station_id = $_POST['station_id'];
        $user_id = $_POST['user_id'];
        //$photo_path = $_POST['photo_path'];
        $description = $_POST['description'];
        $address = $_POST['address'];

        if (isset($_FILES["photo_path"]) && $_FILES["photo_path"]["error"] == 0) {
            $targetDir = "../inputfiles/"; 
            $targetFile = $targetDir . basename($_FILES["photo_path"]["name"]); // Full path to the file
            
            // Get the file extension
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
            // List of allowed file types
            $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx", "mp3", "mp4", "avi", "wav");
    
            // Check if the file type is among the allowed types
            if (in_array($fileType, $allowedTypes)) {
                // Try to move the uploaded file to the specified directory
                if (move_uploaded_file($_FILES["photo_path"]["tmp_name"], $targetFile)) {
                    //echo "The file ". htmlspecialchars(basename($_FILES["file"]["name"])). " has been uploaded.";
                } else {
                   // echo "Sorry, there was an error uploading your file.";
                }
             } //else {
            //     echo "Sorry, only JPG, JPEG, PNG, GIF, PDF, DOC, DOCX, MP3, MP4, AVI, and WAV files are allowed.";
            // }
        } //else {
        //     echo "Error: " . $_FILES["file"]["error"];
        // }
        



        $c = date('Y-m-d H:i:s');
        $sql = "UPDATE `camera_uploading` SET `station_id`='$station_id',`user_id`='$user_id',`photo_path`='$targetFile',`description`='$description',`address`='$address',`updated_at`='$c' WHERE `camera_uploading_id`='$uploading_id'";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
