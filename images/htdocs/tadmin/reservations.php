<?php

// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch reservations
$sql = "SELECT username, request FROM reservations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
      echo "<td>" . $row["username"] . "</td>";
      echo "<td>" . $row["request"] . "</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='2'>No reservations found.</td></tr>";
}

$conn->close();

?>
