<?php
include("../conn.php");
header('Content-Type: application/json');

$data=array();

$sql = "SELECT complaint_type_id, complaint_type_name, created_at FROM complaint_category";
        $response_job = mysqli_query($conn, $sql);

        //$result = array();
        //print_r($response_job);

        if(mysqli_num_rows($response_job)>0){
            $i=0;
            while($row=mysqli_fetch_assoc($response_job)){
                $row_array['complaint_type_id'] = $row['complaint_type_id'];
               // $row_array['complaint_type_name'] = $row['complaint_type_name'];
                $row_array['created_at'] = $row['created_at'];
                $row_array['complaint_type_name'] = is_string($row['complaint_type_name']) ? utf8_encode($row['complaint_type_name']) : $row['complaint_type_name'];
                array_push($data,$row_array);
            }

        }
            //print_r($data);
            
           // echo'{"ProductsData":'.json_encode($data).'}';
            echo json_encode($data,JSON_PRETTY_PRINT);

          // $utf8EncodedArray = array_map('utf8_encode', $data);
//$jsonArray = json_encode($utf8EncodedArray);

//print_r($jsonArray);
            mysqli_close($conn);
   
?>
