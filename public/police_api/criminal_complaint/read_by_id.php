<?php
include("../conn.php");

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $id=$_POST['criminal_id'];

header('Content-Type: application/json');
$data = array();

$sql = "SELECT *, cd.criminal_id AS criminal_id FROM criminal_detail cd
        LEFT JOIN criminal_complaint cc ON cd.criminal_id = cc.criminal_id
        LEFT JOIN investigation i ON cc.fir_id = i.fir_id
        LEFT JOIN complaint c ON i.complaint_id = c.complaint_id
        WHERE cd.criminal_id = '3'";




$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $data[$i] = $row;
        $i++;
    }
    echo json_encode($data, JSON_PRETTY_PRINT);
} else {
    //echo json_encode(array('message' => 'No records found'), JSON_PRETTY_PRINT);
}
//}


mysqli_close($conn);
?>
