<?php

$servername = "localhost";
$username = "php_covid";
$password = "JO7w1XFxFDoHaHm8";
$dbname = "covidreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>