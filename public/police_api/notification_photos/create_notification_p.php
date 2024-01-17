<?php 

include("..//conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if (isset($_POST['notification_photo_path']) && !empty($_POST['notification_photo_path'])) {
    
            $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
            $image_data = $_POST['notification_photo_path'];
        
            
            $upload_dir = "../inputfiles/";
        
            
            $file_path = $upload_dir . $filename;
        
            
             if (file_put_contents($file_path, base64_decode($image_data))) {
    
             }
    
        }

        $notification_photo_id = $_POST['notification_photo_id'];
        $notification_id = $_POST['notification_id'];
       // $notification_photo_path = $_POST['notification_photo_path'];


        $sql = "INSERT INTO `notification_photos` (`notification_photo_id`, `notification_id`, `notification_photo_path`) VALUES (NULL, '$notification_id', '$filename')";

        if(mysqli_query($link, $sql)){
            echo "success";
        } else {
          echo "fail";
        }
    }    

?>
