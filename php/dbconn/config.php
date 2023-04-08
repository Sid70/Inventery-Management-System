<?php
// Database Connection
session_start();
session_unset();


$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "iphone_store";

$conn = mysqli_connect($host, $user, $password , $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>