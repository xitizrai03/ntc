<?php
include "conn.php";
if (isset($_GET["email"])) {
    // echo $_POST["fullname"] ." ". $_POST["email"] ." ". $_POST["password"] ." ". $_POST["phone"] ." ". $_POST["dob"];

    // Register User detail
    $registerQuery = $mysql->prepare("delete from users where email = ?");

    $registerQuery->bind_param("s",  $_GET["email"]);

    $registerQuery->execute();




    // echo "<script>alert('register Successful');</script>";
    header("Location: admin_dashboard.php");
}
