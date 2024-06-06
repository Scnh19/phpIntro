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

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";// update the selected value

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>