<?php
include "conn.php";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    // $password = MD5($_POST["password"]);
    $password = $_POST["password"];
    $role = "user";
    // $md5password = md5($password);

    echo $email . "<br>";
    echo $password . "<br>";
    // echo $md5password . "<br>";

    // if($username == "admin" && $password == "password"){
    //     session_start();
    //     $_SESSION["username"] = $_POST["username"];
    //     header("Location: ./approveuser.php");
    // }

    $loginQuery = $mysql->prepare("select * from users where email=? and password=? and role=?");
    $loginQuery->bind_param("sss", $email, $password, $role);
    $loginQuery->execute();
    $loginQuery->store_result();

    if ($loginQuery->num_rows > 0) {
        session_start();
        $_SESSION["email"] = $_POST["email"];



        header("Location: ./home1.php");
    }

    //null 
    // if($_POST["username"] == "admin" && MD5($_POST["password"] == "5f4dcc3b5aa765d61d8327deb882cf99")){
    //     session_start();
    //     $_SESSION["username"] = $_POST["username"];
    //     header("Location: ./index.php");
    // }
    else {
        echo "<script>alert('wrong username and/or password');</script>";
        echo "wrong username and/or password";
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            background-color: #f0f2f6;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
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
        input[type="password"] {
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
    <div class="login-container">
        <h2>User Login</h2>
        <form action="" method="POST">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit">Login</button>
            <button type="button" class="back-btn" onclick="window.location.href='index2.php';">Back</button>

            <div class="links">
                <p><a href="forget_password.php">Forgot Password?</a> | <a href="registration.php">Registration</a></p> | <a href="admin_login.php">Admin Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>