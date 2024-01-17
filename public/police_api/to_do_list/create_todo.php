<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $police_id = $_POST['police_id'];
        $task_name = $_POST['task_name'];
        
        if($police_id==""){
                $police_id="1";
        }
        
        $c = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `todo_list`(`task_name`, `police_id`) VALUES ('$task_name','$police_id')";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
