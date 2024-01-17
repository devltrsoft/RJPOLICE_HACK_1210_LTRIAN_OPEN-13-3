<?php
include("../conn.php");

header('Content-Type: application/json');
$data = array();

$D = "2023-12-25";
$sql = "SELECT 
            DISTINCT c.complaint_id,
            c.created_at AS complaint_created_at,
            cv.complaint_victim_id,
            cv.created_at AS victim_created_at,
            cs.complaint_suspect_id,
            cs.created_at AS suspect_created_at,
            cw.complaint_witness_id,
            cw.created_at AS witness_created_at,
            cp.complaint_photo_id,
            cp.created_at AS photo_created_at
        FROM complaint c
        LEFT JOIN complaint_victim cv ON cv.complaint_id = c.complaint_id
        LEFT JOIN complaint_suspect cs ON cs.complaint_id = c.complaint_id
        LEFT JOIN complaint_witness cw ON cw.complaint_id = c.complaint_id
        LEFT JOIN complaint_photo cp ON cp.complaint_id = c.complaint_id
        WHERE DATE(c.created_at) = '$D' 
            OR DATE(cv.created_at) = '$D' 
            OR DATE(cs.created_at) = '$D' 
            OR DATE(cw.created_at) = '$D' 
            OR DATE(cp.created_at) = '$D'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $data[$i] = $row;
        $i++;
    }

    echo json_encode($data, JSON_PRETTY_PRINT);
}
?>

