<?php

//$conn=mysqli_connect("localhost","root","","police1");

$server="localhost";
$user="ltrproin_rj";
$password="Ltrsoft@2019";
$db="ltrproin_rj";


$conn=mysqli_connect($server, $user, $password, $db);
$link=mysqli_connect($server, $user, $password, $db);
if(!$conn){
    echo"connection Failed";
}
else{
    //echo "Connection Success<br>";
}




?>