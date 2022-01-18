<?php
$server="localhost";
$user="root";
$password="root";
$database="simplestock_db";
$conn=mysqli_connect($server, $user, $password, $database);
if(!$conn)
die("Error in database connection".mysqli_connect_error());
?>
