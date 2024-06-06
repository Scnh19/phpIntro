<?php
$servername = "localhost";
$username = "perry";
$password = "4*!_AZ9phfN5Q@U]";
$dbname = "sushi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO myguests (full_name, email)
VALUES ('John111 Doe', 'john@example.com');";
$sql .= "INSERT INTO myguests (full_name, email)
VALUES ('John222 Doe3', '3john@example.com');";
$sql .= "INSERT INTO myguests (full_name, email)
VALUES ('John444 Doe4', '4john@example.com');";

if ($conn->multi_query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
