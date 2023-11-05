<?php
// Database connection parameters

$servername = "localhost";
$username = "root";
$password = "";
$database = "shoug";
$conn = mysqli_connect('localhost','root', '','win');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>