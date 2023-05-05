<?php
$hostname     = "localhost"; // Enter Your Host Name
$username     = "root";      // Enter Your Table username
$password     = "";          // Enter Your Table Password
$databasename = "admin_panel"; // Enter Your database Name

// Create database connection
$conn = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query data from users table
$query = "SELECT * FROM users";
$result = $conn->query($query);

// Display results
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Id " . $row["id"]. " - Gender: " . $row["gender"]. " - Age: " . $row["age"]. " - Status: " . $row["status"]. "<br>";
  }
} else {
  echo "No users found";
}

// Close database connection
$conn->close();
?>

