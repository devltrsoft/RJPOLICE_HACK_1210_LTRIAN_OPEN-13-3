<?php
include("../conn.php");

$data = array(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $email = $_POST['email'];
     $password = $_POST['password'];
    

    $sql = "SELECT * FROM police WHERE `police_email` = '$email' OR `police_mobile1` = '$email' OR  `police_mobile2` = '$email' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $i=0;
        while ($row = mysqli_fetch_assoc($result)) {


            if ($password == $row['police_password']) {
                $response['Message'] = "100";
                $response[$i]=$row;
                $i++;
                
                $position=$row['position_id'];

                $exist = "SELECT * FROM position WHERE position_id = '$position'";
                $r = mysqli_query($conn, $exist);
                
                if (mysqli_num_rows($r) == 1) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $response[$i]=$row['position_name'];
                       
                        $i++;

                    }


                    // $check_sql = "SELECT * FROM `user_role` WHERE `user_id`='$user_id' AND `role_id`='$role_id'";
                    // $check_result = $link->query($check_sql);
                   
                }

               
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