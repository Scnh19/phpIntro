<?php
$servername = "localhost";
$username = "perry";
$password = "4*!_AZ9phfN5Q@U]";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY firstname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["lastname"]. ", " . $row["firstname"]. "<br>";// print all record on db in order
  }
} else {
  echo "0 results";
}
$conn->close();
?>