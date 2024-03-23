<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root"; // default username for XAMPP
$password = ""; // default password for XAMPP
$dbname = "siddhic"; // change this to your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connection Success";
// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
  $email = $_POST['email'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $plan = $_POST['plan'];

    // You should validate and sanitize the input to prevent SQL injection

    // Insert the data into the database
    $sql = "INSERT INTO Register (name,email,height,weight,plan) values ('$name','$email','$height','$weight','$plan')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>