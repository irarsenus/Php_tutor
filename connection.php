<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "stock_db";

$con = mysqli_connect($hostname, $username, $password, $database);

if(!$con)
{
  die("fail toconnect".mysqli_connect_error());
}
else{
    echo'connected!!!!!!!';
}
?>