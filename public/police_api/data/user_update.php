<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['user_photo']) && !empty($_POST['user_photo'])) {
    
        $filename = date("d-y-m") . "-" . time() . "-" . rand(1000, 10000) . ".jpg";
        $image_data = $_POST['user_photo'];
    
        
        $upload_dir = "../inputfiles/";
    
        
        $file_path = $upload_dir . $filename;
    
        
         if (file_put_contents($file_path, base64_decode($image_data))) {

         }

    }
        
$user_id=$_POST['user_id'];
$user_fname=$_POST['user_fname'];
$user_mname=$_POST['user_mname'];
$user_lname=$_POST['user_lname'];
$user_address=$_POST['user_address'];
//$user_photo=$_POST['user_photo'];
$country_id=$_POST['country_id'];
$state_id=$_POST['state_id'];
$district_id=$_POST['district_id'];
$city_id=$_POST['city_id'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];
$user_gender=$_POST['user_gender'];
$user_mobile1=$_POST['user_mobile1'];
$user_mobile2=$_POST['user_mobile2'];
$user_dob=$_POST['user_dob'];
$user_adhar=$_POST['user_adhar'];
$user_fcn_token=$_POST['user_fcn_token'];

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
$c = date('Y-m-d');
$sql="UPDATE user SET user_fname='$user_fname', user_mname='$user_mname',user_lname='$user_lname',user_address='$user_address',user_photo='$filename',country_id='$country_id',state_id='$state_id',district_id='$district_id',city_id='$city_id',user_email='$user_email',user_password='$user_password',user_gender='$user_gender',user_mobile1='$user_mobile1',user_mobile2='$user_mobile2',user_dob='$user_dob', user_adhar='$user_adhar', `updated_at`='$c', `user_fcn_token`='$user_fcn_token' WHERE user_id='$user_id'";
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