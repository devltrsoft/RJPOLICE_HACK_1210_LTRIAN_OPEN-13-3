<?php
include("../conn.php");
header('Content-Type: application/json');

$data=array();

$sql = "SELECT complaint_type_id, complaint_type_name FROM complaint_category";
        $response_job = mysqli_query($conn, $sql);

       
        //$result = array();
        print_r($response_job);

        if(mysqli_num_rows($response_job)>0){
            $i=0;
            while($row=mysqli_fetch_assoc($response_job)){
                $data[$i]=$row;
                $i++;
                
        
            }

        }
            //print_r($data);
            echo json_encode($data,JSON_PRETTY_PRINT);
            mysqli_close($conn);
   
?>
