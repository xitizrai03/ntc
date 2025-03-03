<?php

include "conn.php";


$email = $_GET["email"];
$phone = $_GET["phone"];

echo $email . "<br>";
echo $phone . "<br>";

$otp_random = rand(1000, 9999);


echo $otp_random . "<br>";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            width: 50px;
            height: 50px;
            font-size: 24px;
            text-align: center;
            margin: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
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

    <div class="otp-container">
        <!-- <form method="GET"> -->
        <h2>Enter 4-Digit OTP</h2>
        <p>Please enter the OTP you received</p>
        <div>
            <input type="text" maxlength="1" class="otp-input" id="otp1" oninput="moveNext(otp1, otp2)" />
            <input type="text" maxlength="1" class="otp-input" id="otp2" oninput="moveNext(otp2, otp3)" />
            <input type="text" maxlength="1" class="otp-input" id="otp3" oninput="moveNext(otp3, otp4)" />
            <input type="text" maxlength="1" class="otp-input" id="otp4" oninput="moveNext(otp4, null)" />
        </div>

        <input type="hidden" alue='<?php $otp_random; ?>' name="correct_OTP">

        <input type="hidden" value='<?php $email; ?>' name="email">

        <input type="hidden" value='<?php $phone; ?>' name="phone">

        <div class="btn-container">
            <button class="btn" onclick="verifyOTP()">Verify OTP</button>
            <button class="resend-btn" onclick="resendOTP()">Resend OTP</button>
        </div>

        <p class="message" id="message"></p>
        <p id="otpDisplay" style="color: blue; font-weight: bold;"></p> <!-- OTP display for testing -->

        <button class="resend-btn" type="submit" name="changepassword">Change Password</button>
        <!-- </form> -->
    </div>

    <script>
        // let correctOTP = generateOTP(); // Generate a new OTP on page load

        // function resendOTP() {
        //     alert
        // }

        // function moveNext(current, next) {
        //     if (current.value.length === 1 && next) {
        //         next.focus();
        //     }
        // }

        // document.addEventListener("keydown", function (event) {
        //     let target = event.target;
        //     if (event.key === "Backspace" && target.classList.contains("otp-input") && target.value === "") {
        //         let prev = target.previousElementSibling;
        //         if (prev) prev.focus();
        //     }
        // });

        // function verifyOTP() {
        //     let enteredOTP =
        //         document.getElementById("otp1").value +
        //         document.getElementById("otp2").value +
        //         document.getElementById("otp3").value +
        //         document.getElementById("otp4").value;

        //     let message = document.getElementById("message");

        //     if (enteredOTP === correctOTP) {
        //         message.textContent = "✅ OTP Successful!";
        //         message.className = "message success";


        //     } else {
        //         message.textContent = "❌ Authentication Failed!";
        //         message.className = "message error";
        //     }
        // }


    </script>

</body>

</html>