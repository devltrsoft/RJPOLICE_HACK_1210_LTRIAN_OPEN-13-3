<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

   
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $police_feedback_id=$_POST['police_feedback_id'];
        $sql_job = "SELECT * FROM police_feedback pf, police p WHERE pf.police_id = p.police_id";
        $result = mysqli_query($conn, $sql_job);

        

        if(mysqli_num_rows($result)>0){
            $i=0;
            while($row=mysqli_fetch_assoc($result)){
                $data[$i]=$row;
                $i++;
                
        
            }
            //print_r($data);
            echo json_encode($data,JSON_PRETTY_PRINT);
        }

    }  

?>
