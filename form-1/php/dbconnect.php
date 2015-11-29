<?php
$server = "localhost:8889/blinx";
$username = "root";
$password = "root";

$conn = new mysqli($server, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

/* header($redir_location);
die(); */
?>
