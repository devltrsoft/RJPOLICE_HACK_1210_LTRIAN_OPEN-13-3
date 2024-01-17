<?php
include("../conn.php");
//CASE WHEN DATE(c.created_at) = '$D' THEN 1 ELSE 0 END AS is_highlighted
header('Content-Type: application/json');
$data = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$D = $_POST['created_date'];
$sql = "SELECT 
            c.*, 
            cf.*, 
            s.*, 
            u.*, 
            cc.*, 
            ss.*, 
            dd.*, 
            ci.*, 
            cv.*, 
            cs.*, 
            cw.*, 
            cp.*,
            c.created_at AS complaint_created_at,
            cv.created_at AS victim_created_at,
            cs.created_at AS suspect_created_at,
            cw.created_at AS witness_created_at,
            cp.created_at AS photo_created_at, c.complaint_id AS complaint_id
            
        FROM complaint c
        
        LEFT JOIN complaint_fir cf ON cf.complaint_fir_id = c.complaint_fir_id
        LEFT JOIN status s ON c.status_id = s.status_id
        LEFT JOIN user u ON c.user_id = u.user_id
        LEFT JOIN country cc ON cc.country_id = u.country_id
        LEFT JOIN state ss ON ss.state_id = u.state_id
        LEFT JOIN district dd ON dd.district_id = u.district_id
        LEFT JOIN city ci ON ci.city_id = u.city_id
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

}
?>

