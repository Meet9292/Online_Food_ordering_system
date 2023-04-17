<?php

$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "onlinefoodphp";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); 
if (!$db) {      
    die("Connection failed: " . mysqli_connect_error());
}
?>