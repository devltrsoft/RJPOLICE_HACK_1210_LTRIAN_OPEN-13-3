<?php
include("../conn.php");

$data = array(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $email = $_POST['email'];
     $password = $_POST['password'];
    

    $sql = "SELECT * FROM user WHERE `user_email` = '$email' OR `user_mobile1` = '$email' OR  `user_mobile2` = '$email' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $i=0;
        while ($row = mysqli_fetch_assoc($result)) {


            if ($password == $row['user_password']) {
                $response['Message'] = "100";
                $response[$i]=$row;
                $i++;
                
                

               
            } else {
                $response['Message'] = "200";
            }
        }
    } else {
        $response['Message'] = "300";
    }

   
    echo json_encode($response, JSON_PRETTY_PRINT);
    
}


?>