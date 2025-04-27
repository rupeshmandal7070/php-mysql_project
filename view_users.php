<?php
include 'config.php';

$result = $conn->query("SELECT * FROM users");

echo "<h2>Registered Users</h2>";
echo "<ul>";
while ($row = $result->fetch_assoc()) {
  echo "<li>" . $row['name'] . " (" . $row['email'] . ")</li>";
}
echo "</ul>";

$conn->close();
?>
