<?php
include("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$police_id=$_POST['police_id'];
$complaint_id=$_POST['complaint_id'];

$insertquery="INSERT INTO police_complaint(police_id,complaint_id)VALUES('$police_id','$complaint_id')";
$result = mysqli_query($conn, $insertquery);

if ($result) {
    
     $update="update complaint set status_id=2, complaint_fir_id='2' where complaint_id='$complaint_id'";
 $result1 = mysqli_query($conn, $update);

 if ($result1) {
    echo "success";

} else {
    //echo "result not success".mysqli_connect_error($conn);
}

}
// } else {
//     echo "result not success".mysqli_connect_error($conn);
 }

?>
