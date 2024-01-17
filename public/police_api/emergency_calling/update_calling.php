
<?php 

include("..//conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $calling_id=$_POST['calling_id'];
        $state_id = $_POST['state_id'];
        $police_no = $_POST['police_no'];
        $firebriget = $_POST['firebriget'];
        $medical = $_POST['medical'];
        $women_helpline = $_POST['women_helpline'];

        $c = date('Y-m-d H:i:s');
        
        $sql = "UPDATE `emergency_calling` SET `state_id`='$state_id',`police_no`='$police_no',`firebriget`='$firebriget',`medical`='$medical',`women_helpline`='$women_helpline',`updated_at`='$c' WHERE `calling_id`='$calling_id'";

        if(mysqli_query($conn, $sql)){
           echo"success";
    
        } else {
           echo"error";
        }
    }    

?>
