<?php
$servername = "localhost";
$username = "perry";
$password = "4*!_AZ9phfN5Q@U]";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>