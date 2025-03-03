<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Telecom</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f9;
            overflow-x: hidden;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #054f9d, #0077b6);
            padding: 15px 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Logo */
        .logo img {
            height: 50px;
            transition: transform 0.3s ease-in-out;
        }

        .logo img:hover {
            transform: scale(1.1);
        }

        /* Navigation */
        .nav {
            display: flex;
            gap: 15px;
        }

        .nav a {
            background: linear-gradient(45deg, #054f9d, #0077b6);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: 500;
            border-radius: 30px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .nav a:hover {
            transform: translateY(-3px);
            background: linear-gradient(45deg, #054f9d, #0077b6);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        /* Carousel Section */
        .carousel-section {
            margin-top: 100px;
            padding: 20px;
        }

        .carousel-item img {
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        /* Info Bar */
        .info-bar {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .info-bar:hover {
            transform: translateY(-5px);
        }

        .info-bar h4 {
            color: #054f9d;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .info-bar .list-group-item {
            border: none;
            background: transparent;
            font-size: 14px;
            color: #333;
            padding: 10px 0;
        }

        /* Welcome Section */
        .welcome {
            text-align: center;
            padding: 60px 5%;
            background: linear-gradient(135deg, #ffffff, #f4f4f9);
            border-radius: 10px;
            margin: 40px auto;
            max-width: 800px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .welcome:hover {
            transform: translateY(-5px);
        }

        .welcome h2 {
            color: #054f9d;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .welcome p {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #054f9d, #0077b6);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.2);
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header fade-in">
        <div class="logo">
            <img src="images/logo.jpg" alt="Nepal Telecom Logo">
        </div>
        <div class="nav">
            <a href="index1.php">Home</a>
            <a href="contactus.php">Contact Us</a>
            <a href="registration.php">Sign Up</a>
            <a href="login.php">Log In</a>
        </div>
    </div>

    <!-- Carousel Section -->
    <div class="carousel-section fade-in">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/logo.jpg" class="d-block w-100" alt="Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo.jpg" class="d-block w-100" alt="Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo.jpg" class="d-block w-100" alt="Image 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-bar fade-in">
                        <h4>Information & Updates</h4>
                        <ul class="list-group">
                            <li class="list-group-item">📧 Email: Ntc.np@gmail.com</li>
                            <li class="list-group-item">📅 Date: <span id="currentDate"></span></li>
                            <li class="list-group-item">📍 Location: Kathmandu, Nepal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="welcome fade-in">
        <h2>Welcome to Nepal Telecom</h2>
        <p>Nepal Telecom has always put its endeavors in providing its valued services. We are committed to delivering the best communication solutions to our customers.</p>
    </div>

    <!-- Footer -->
    <div class="footer fade-in">
        <p>&copy; 2023 Nepal Telecom. All rights reserved.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Display Current Date
        document.getElementById("currentDate").innerText = new Date().toDateString();
    </script>
</body>
</html>