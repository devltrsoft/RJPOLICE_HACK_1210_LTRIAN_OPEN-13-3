<?php 

include("..//conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $state_id = $_POST['state_id'];
        $police_no = $_POST['police_no'];
        $firebriget = $_POST['firebriget'];
        $medical = $_POST['medical'];
        $women_helpline = $_POST['women_helpline'];
        
        $sql = "INSERT INTO `emergency_calling`(`state_id`, `police_no`, `firebriget`, `medical`, `women_helpline`) VALUES ('$state_id','$police_no','$firebriget','$medical','$women_helpline')";

        if(mysqli_query($conn, $sql)){
           echo"success";
    
        } else {
           echo"error";
        }
    }    

?>
