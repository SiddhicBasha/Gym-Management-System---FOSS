<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siddhic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$plan = $_POST['plan'];

$sql = "SELECT name,email,height,weight FROM Register where plan like '$plan'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " - E-mail: " . $row["email"]. " Weight: " . $row["weight"]." Height: " . $row["height"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>