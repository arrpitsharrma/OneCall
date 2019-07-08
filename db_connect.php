<?php
$servername = "<serverName>";
$username = "root";
$password = "mypassword";

// Create connection
$conn = new mysqli($servername, $username, $password, "onecalldb");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
