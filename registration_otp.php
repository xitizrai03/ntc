<?php





$otp = $_GET["registration_otp"];

// echo $email . "<br>";
// echo $phone . "<br>";
// echo $otp . "<br>";
// echo "<script> alert(" . $otp_random . ")</script>";

if (isset($_POST["otp_submit"])) {

    if ($otp == $_POST["input_otp"]) {

        header("Location: login.php");
    } else {
        echo "<script> alert('wrong OTP')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>OTP Authentication</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .otp-container {
            margin-top: 100px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #054f9d;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        .otp-input {
            width: 300px;
            height: 50px;
            font-size: 24px;
            text-align: center;
            margin: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
            letter-spacing: 5px;
        }

        .otp-input:focus {
            border-color: #054f9d;
            box-shadow: 0 0 5px #054f9d;
        }

        .btn-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .btn {
            background: linear-gradient(45deg, #54a0ff, #5f27cd);
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            width: 150px;
            text-align: center;
            font-weight: bold;
        }

        .btn:hover {
            background: linear-gradient(45deg, #feb47b, #ff7e5f);
            transform: scale(1.05);
        }

        .resend-btn {
            background: linear-gradient(45deg, #54a0ff, #5f27cd);
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            width: 150px;
            text-align: center;
            font-weight: bold;
        }

        .resend-btn:hover {
            background: linear-gradient(45deg, #feb47b, #ff7e5f);
            transform: scale(1.05);
        }

        .message {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>


    <!-- Notification Example -->
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            Test OTP <br>
            <?php echo $otp . "<br>"; ?>
        </div>
    </div>





    <div class="otp-container">
        <!-- <form method="GET"> -->
        <h2>Enter 4-Digit OTP</h2>
        <p>Please enter the OTP you received</p>
        <form method="post">
            <div>
                <input type="text" maxlength="4" class="otp-input" name="input_otp" required />
            </div>

            <div class="btn-container">
                <button class="btn" type="submit" name="otp_submit">Verify OTP</button>
                <!-- <button class="resend-btn" id="showToastButton">Resend OTP</button> -->
            </div>
        </form>

        <!-- <p class="message" id="message"></p>
        <p id="otpDisplay" style="color: blue; font-weight: bold;"></p> OTP display for testing -->

        <!-- <button class="resend-btn" type="submit" name="changepassword">Change Password</button> -->
        <!-- </form> -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>