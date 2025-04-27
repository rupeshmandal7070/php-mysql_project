<?php
$host = 'localhost';
$user = 'root';
$password = 'rupesh@12345';
$dbname = 'simple_project';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
