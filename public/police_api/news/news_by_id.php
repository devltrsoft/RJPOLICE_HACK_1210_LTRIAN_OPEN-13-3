<?php
include("../conn.php");

header('Content-Type: application/json');
$data=array();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $news_id = $_POST['news_id'];
// $sql="select * from news n, news_category nc where n.news_category_id=nc.news_category_id";

$sql = "SELECT * 
        FROM news n 
        LEFT JOIN news_photos np ON n.news_id = np.news_id
        LEFT JOIN news_category nc ON n.news_category_id = nc.news_category_id  
       ";
$result=mysqli_query($conn,$sql);
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

