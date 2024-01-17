<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $station_id = $_POST['station_id'];
        $user_id = $_POST['user_id'];
        //$filename = $_POST['photo_path'];
        $description = $_POST['description'];
        $address = $_POST['address'];

        if($station_id==""){
            $station_id="1";
        }
        if($user_id==""){
            $user_id="1";
        }

        if (isset($_POST['photo_path']) && !empty($_POST['photo_path'])) {
    
            $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . "jpeg";
            $image_data = $_POST['photo_path'];
            $decoded_data = base64_decode($image_data);

            $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

            
            $upload_dir = "../inputfiles/";
        
            
            $file_path = $upload_dir . $filename;
        
            
             if (file_put_contents($file_path, base64_decode($image_data))) {
    
             }
    
        }

       // $c = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `camera_uploading`(`station_id`, `user_id`, `photo_path`, `description`, `address`) VALUES ('$station_id','$user_id','$filename','$description','$address')";

        if(mysqli_query($conn, $sql)){
          echo "success";
          echo"<br>".$decoded_data;
          //echo"<br>$file_extension";
        } else {
            echo "Fail";
           // echo"<br>$f";
          //echo"<br>$file_path";
        }
    }  
    

?>
