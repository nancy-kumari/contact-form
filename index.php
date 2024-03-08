
<?php

//connecting to database
$servername = "localhost";
$username= "root";
$password= "";
$database = "info";

// CREATE CONNECTION
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("connection unseccessful".mysqli_connect_error());
}


?>

 