<?php
include('../conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['complaint_photo_path']) && !empty($_POST['complaint_photo_path'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['complaint_photo_path'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }
    
$complaint_photo_id=$_POST['complaint_photo_id'];
$complaint_id=$_POST['complaint_id'];
//$complaint_photo_path=$_POST['complaint_photo_path'];
$complaint_photo_description=$_POST['complaint_photo_description'];

if($complaint_id==""){
    $complaint_id="1";
}
$sql="UPDATE complaint_photo SET complaint_photo_path='$filename',complaint_id='$complaint_id',complaint_photo_description='$complaint_photo_description'WHERE complaint_photo_id='$complaint_photo_id'";
$result=mysqli_query($conn,$sql);
if($sql)
{
    echo"success";
}
else
{
    echo"fail";
}}


?>
