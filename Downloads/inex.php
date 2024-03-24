<?php
$servername = "db";
$username = "lamp_user";
$password = "lamp_password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected successfully to MySQL database.";
}

$conn->close();
?>
