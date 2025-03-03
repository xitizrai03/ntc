<?php
include 'conn.php'; // Include database connection

if(isset($_POST['otp']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $otp = $_POST['otp'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Prepare SQL statement to update the OTP
    $otpInsertQuery = $mysql->prepare("UPDATE users SET otp = ? WHERE email = ? AND phone = ?");
    $otpInsertQuery->bind_param("sss", $otp, $email, $phone);
    
    if($otpInsertQuery->execute()) {
        echo "OTP stored successfully!";
    } else {
        echo "Error storing OTP: " . $mysql->error;
    }

    $otpInsertQuery->close();
    $mysql->close();
} else {
    echo "Invalid request!";
}
?>
