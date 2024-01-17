<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

if($_SERVER["REQUEST_METHOD"] == "POST"){

        
    $fir_id = $_POST['fir_id'];
    
  


$sql_job = "SELECT * FROM fir_tracking ft
INNER JOIN police p ON ft.registered_police = p.police_id
INNER JOIN investigation i ON ft.fir_id = i.fir_id
INNER JOIN complaint c ON c.complaint_id = i.complaint_id
 WHERE ft.fir_id='$fir_id'
";

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
