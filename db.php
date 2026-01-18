<?php
session_start();

$host = "127.0.0.1"; 
$port = 3306;            
$user = "root"; 
$password = "FHMNx35888#";
$dbname = "web_fp";

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
