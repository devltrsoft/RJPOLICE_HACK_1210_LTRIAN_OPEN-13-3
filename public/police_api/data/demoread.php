<?php 

include("..//conn.php");
// Check connection
if($link === false){
 
    die("ERROR: Could not connect   . " . mysqli_connect_error());
}else{
    // echo'Login';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        

      
       $sql_job = "SELECT * FROM  event ";
       $response_job = mysqli_query($link, $sql_job);
       
       $result = array();
       $result['event'] = array();
   
       if($response_job ){
           while($row = mysqli_fetch_assoc($response_job)){
                $index['event_id'] = $row['event_id'];
                $index['event_name'] = $row['event_name'];
                $index['event_type_id'] = $row['event_type_id'];
                $index['event_description'] = $row['event_description'];
                $index['event_guest'] = $row['event_guest'];
                $index['event_venue'] = $row['event_venue'];
                $index['event_date_time'] = $row['event_date_time'];
                $index['event_duration'] = $row['event_duration'];
               $result['event'][] = $index;
                 array_push($result['event'][],$index);
           }
   
       $result["Success"] = "1";
       $result["message"] = "Success";
   } else {
       $result["Success"] = "0";
       $result["message"] = "error";
   }
   
       echo json_encode($result);
       mysqli_close($link);
}    
}
?>
