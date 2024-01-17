<?php
require'conn.php';
$police_id=$_POST['police_id'];
$qualification_level_id=$_POST['qualification_level_id'];
$qualification_school_college=$_POST['qualification_school_college'];
$qualification_passing_year=$_POST['qualification_passing_year'];
$qualification_percentage_cgpa=$_POST['qualification_percentage_cgpa'];
$insertquery="INSERT INTO qualification_level(qualification_level_id,qualification_level_id,qualification_school_college,qualification_percentage_cgpa)VALUES('$qualification_level_id','$qualification_school_college','$qualification_passing_year','$qualification_percentage_cgpa')";
$result = mysqli_query($conn, $insertquery);

if ($result) {
    echo "result success";
} else {
    echo "result not success".mysqli_connect_error($conn);
}
?>
