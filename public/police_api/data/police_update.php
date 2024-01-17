<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['police_photo_path']) && !empty($_POST['police_photo_path'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['police_photo_path'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }
	
$police_id=$_POST['police_id'];
$batch_number=$_POST['batch_number'];
$station_id=$_POST['station_id'];
$police_fname=$_POST['police_fname'];
$police_mname=$_POST['police_mname'];
$police_lname=$_POST['police_lname'];
$police_email=$_POST['police_email'];
$police_password=$_POST['police_password'];
$police_gender=$_POST['police_gender'];
$police_dob=$_POST['police_dob'];
$police_adhar=$_POST['police_adhar'];
$police_moblie1=$_POST['police_mobile1'];
$police_moblie2=$_POST['police_mobile2'];
//$police_photo_path=$_POST['police_photo_path'];
$police_address=$_POST['police_address'];
$country_id=$_POST['country_id'];
$state_id=$_POST['state_id'];
$district_id=$_POST['district_id'];
$city_id=$_POST['city_id'];
$position_id=$_POST['position_id'];
$police_fcm_token=$_POST['police_fcm_token'];

if($country_id==""){
    $country_id="1";
}
if($state_id==""){
    $state_id="1";
}
if($district_id==""){
    $district_id="1";
}
if($city_id==""){
$city_id="1";
}
$c = date('Y-m-d H:i:s');

$sql="UPDATE police SET batch_number='$batch_number',station_id='$station_id',police_fname='$police_fname',police_mname='$police_mname',police_lname='$police_lname',police_password='$police_password',police_gender='$police_gender',police_dob='$police_dob',police_adhar='$police_adhar',police_mobile1='$police_moblie1',police_mobile2='$police_moblie2',police_photo_path='$police_photo_path',police_address='$police_address',country_id='$country_id', state_id='$state_id',district_id='$district_id',city_id='$city_id', position_id='$position_id', police_fcm_token='$police_fcm_token', updated_at='$c' WHERE police_id='$police_id'";
$result=mysqli_query($conn,$sql);
if($sql)
{
	echo"success";
}
else
{
	echo"update not sucessfully".mysqli_connect_error($conn);
}
}

?>
