<?php
include "conn.php";
session_start();

if (!isset($_SESSION["otp_email"]) || !isset($_SESSION["otp_phone"])) {
    session_destroy();
    header("Location: ./login.php");
    die();
}


if (isset($_POST["update"])) {
    $new_password = $_POST["new_password"];
    $re_password = $_POST["re_password"];
    $email = $_SESSION["otp_email"];
    $phone = $_SESSION["otp_phone"];

    if ($new_password == $re_password) {
        // echo "<script> alert(" . $otp . ")</script>";
        // Prepare SQL statement to update the OTP
        $otpInsertQuery = $mysql->prepare("UPDATE users SET password = ? WHERE email = ? AND phone = ?");
        $otpInsertQuery->bind_param("sss", $new_password, $email, $phone);

        if ($otpInsertQuery->execute()) {
            echo "Password changes successfully!";
            session_destroy();
            header("Location: login.php");
        } else {
            echo "Error : " . $mysql->error;
        }
    } else {
        echo "<script> alert('Wrong Password')</script>";
    }


    // header("Location: ./login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
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

        .recovery-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
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
        }

        input[type="email"],
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
        }

        button:hover {
            background-color: #003e7e;
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
    </style>
</head>

<body>
    <div class="recovery-container">
        <h2>Change Password</h2>
        <form method="post">
            <label for="email">Enter new password</label>
            <input type="password" name="new_password" placeholder="Enter new password" required>

            <label for="phone">Enter re-password</label>
            <input type="password" name="re_password" placeholder="Enter re-password" required>

            <!-- <input type="hidden" value='<?php $otp_random; ?>' name="otp"> -->

            <button type="submit" name="update">Update </button>

            <!-- <div class="links">
                <p><a href="login.html">Back to Login</a></p>
            </div> -->
        </form>
    </div>
</body>

</html>