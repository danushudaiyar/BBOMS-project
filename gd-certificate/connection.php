<?php
error_reporting(0);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "register";
 
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
   //echo "connection ok";
}
else
{
    echo "connection failed".mysqli_connection_error();
}
?>