<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

   

        $sql_job = "SELECT * FROM training_video tv , police_station ps where tv.station_id=ps.police_station_id ";
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

        

?>
