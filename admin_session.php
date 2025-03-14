<?php
session_start();  // Start the session

// Check if the user is logged in (session variable for email exists)
if (!isset($_SESSION['admin_email'])) {
    // If the user is not logged in, redirect them to the login page
    header("Location: admin_login.php");
    exit();  // Stop further script execution
}
