<?php 

include("../conn.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){

       $todo_id=$_POST['todo_id'];
        $police_id = $_POST['police_id'];
        $task_name = $_POST['task_name'];
        
       
        if($police_id==""){
                $police_id="1";
        }
        
        $c = date('Y-m-d H:i:s');

        $sql = "UPDATE `todo_list` SET `task_name`='$task_name',`police_id`='$police_id',`updated_at`='$c' WHERE  `todo_id`='$todo_id'";

        if(mysqli_query($conn, $sql)){
          echo "success";
        } else {
            echo "Fail";
        }
    }    

?>
