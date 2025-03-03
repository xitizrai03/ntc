<?php
include 'conn.php';

// print_r($_FILES);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["phone"]) && isset($_POST["dob"])) {

        // echo $_POST["fullname"] ." ". $_POST["email"] ." ". $_POST["password"] ." ". $_POST["phone"] ." ". $_POST["dob"];

        // Register User detail
        $registerQuery = $mysql->prepare("insert into users(fullname, email, password, phone, dob)values (?,?,?,?,?);");

        $registerQuery->bind_param("sssss", $_POST["fullname"], $_POST["email"], $_POST["password"], $_POST["phone"], $_POST["dob"]);

        $registerQuery->execute();




        echo "<script>alert('register Successful');</script>";
        // header("location: login.php");
    }


 
// else {
//     echo "<script>alert('register failed');</script>";
// }



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f7f8fa;
        }

        .registration-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #054f9d;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #003f7d;
        }

        .links {
            text-align: center;
            margin-top: 16px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-btn {
            background-color: #555;
        }

        .back-btn:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <div class="registration-container">
        <h2>Register</h2>
        <form action="" method="POST">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>

            <button type="submit">Register</button>
            <button type="button" class="back-btn" onclick="window.location.href='index1.php';">Back</button>

            <div class="links">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </form>
    </div>
</body>

</html>