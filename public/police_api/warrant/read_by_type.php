<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

if($_SERVER["REQUEST_METHOD"] == "POST"){

        
   
    $warrant_type_id = $_POST['warrant_type_id'];
  

        $sql_job = "SELECT * FROM warrant w, warrant_type wt, investigation i WHERE w.warrant_type_id = wt.warrant_type_id and w.fir_id=i.fir_id and w.warrant_type_id='$warrant_type_id' ";
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
