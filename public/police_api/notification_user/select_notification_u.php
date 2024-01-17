<?php
include("..//conn.php");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo 'Login';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $notification_user_id= $_POST['notification_user_id'];

        $sql_job = "SELECT * FROM notification_user WHERE notification_user_id = '$notification_user_id'";
        $response_job = mysqli_query($link, $sql_job);

        $result = array();
        $result['notification_user'] = array();

        if ($response_job) {
            while ($row = mysqli_fetch_assoc($response_job)) {
                $index['notification_user_id'] = $row['notification_user_id'];
                $index['notification_id'] = $row['notification_id'];
                $index['user_id'] = $row['user_id'];
                
             
                               

                $result['notification_user'][] = $index;
            }

            $result["Success"] = "1";
            $result["message"] = "Success";
        } else {
            $result["Success"] = "0";
            $result["message"] = "error";
        }

        echo json_encode($result);
        mysqli_close($link);
    }
}
?>
