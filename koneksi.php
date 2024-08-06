<?php
$servername = "localhost";
$database = "tsa_web";
$username = "root";
$password ="";

//Create connection
$connect = new mysqli($servername,$username,$password,$database);

//Create connection
//if($connect->connect_error){
//   die("Connection failed:".$connect->connect_error);
//}
//echo"Connected succesfully";
?>