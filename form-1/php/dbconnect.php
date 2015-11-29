<?php
$server = "localhost:8889";
$username = "root";
$password = "root";

$conn =  new mysqli($server, $username, $password,'blinx');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

/*header($redir_location);
die(); */
?>
