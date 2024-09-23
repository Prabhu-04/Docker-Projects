<?php
$servername = "mysql";
$username = "lamp_user";
$password = "lamp_password";
$dbname = "lamp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h1>Connected to MySQL successfully!</h1>";
?>

