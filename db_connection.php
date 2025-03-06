<?php
$servername = "localhost"; // MySQL host (use localhost for local servers)
$username = "root"; // MySQL username (default: root)
$password = ""; // MySQL password (default: empty for local servers)
$dbname = "profile_user"; // Name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
