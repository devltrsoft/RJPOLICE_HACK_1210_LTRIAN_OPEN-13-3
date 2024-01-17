<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $fir_id = $_POST['fir_id'];
        $warrant_type_id = $_POST['warrant_type_id'];
        $warrant_against = $_POST['warrant_against'];
        $date_issued = $_POST['date_issued'];
        $description = $_POST['description'];
        $action = $_POST['action'];
        $court_name = $_POST['court_name'];
        $issuing_authority = $_POST['issuing_authority'];
        
        $c = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `warrant`(`fir_id`, `warrant_type_id`, `warrant_against`, `date_issued`, `description`, `action`, `court_name`, `issuing_authority`) VALUES ('$fir_id','$warrant_type_id','$warrant_against','$date_issued','$description','$action','$court_name','$issuing_authority')";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
