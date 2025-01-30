<?php 

//setting Variables 
$hname = "localhost";
$uname = "root";
$pass = "1234"; 
$db = "dodosweb";

// Establishing the connection 
$con = mysqli_connect($hname,$uname,$pass,$db);

// Error Handling 
if(!$con){
  die("Cannot Connect to Database".mysqli_connect_error());
}

?>