<?php

session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logout Page</title>
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
			background-color: #f3f4f7;
		}

		.logout-container {
			text-align: center;
			background: white;
			padding: 40px;
			border-radius: 12px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
			width: 100%;
			max-width: 400px;
		}

		h2 {
			margin-bottom: 20px;
		}

		p {
			margin-bottom: 20px;
			color: #555;
		}

		button {
			padding: 12px 24px;
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

		a {
			display: block;
			margin-top: 16px;
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
	<div class="logout-container">
		<h2>Logged Out Successfully</h2>
		<p>You have been logged out of your account.</p>
		<button onclick="window.location.href='login.php';">Go to Login Page</button>
		<button class="back-btn" onclick="history.back()">Back</button>
		<a href="index1.php">Return to Homepage</a>
	</div>
</body>

</html>