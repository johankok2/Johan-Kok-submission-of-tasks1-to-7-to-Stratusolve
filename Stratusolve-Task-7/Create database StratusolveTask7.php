<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection to database failed: " . $conn->connect_error);
}
// Create new database with name Stratusolvetask7
$sql = "CREATE DATABASE stratusolvetask7";
if ($conn->query($sql) === TRUE) {
  echo "Database with name stratusolvetask7 created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
?>