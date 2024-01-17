<?php
include("..//conn.php");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo 'Login';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $notification_police_id= $_POST['notification_police_id'];

        $sql_job = "SELECT * FROM notification_police WHERE notification_police_id = '$notification_police_id'";
        $response_job = mysqli_query($link, $sql_job);

        $result = array();
        $result['notification_police'] = array();

        if ($response_job) {
            while ($row = mysqli_fetch_assoc($response_job)) {
                $index['notification_police_id'] = $row['notification_police_id'];
                $index['notification_id'] = $row['notification_id'];
                $index['police_id'] = $row['police_id'];
                
             
                               

                $result['notification_police'][] = $index;
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
