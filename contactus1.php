<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["message"])) {


    // echo $_POST["fullname"] ." ". $_POST["email"] ." ". $_POST["password"] ." ". $_POST["phone"] ." ". $_POST["dob"];

    // Register User detail
    $contactQuery = $mysql->prepare("insert into contacts(fullname, email, message)values (?,?,?);");

    $contactQuery->bind_param("sss", $_POST["fullname"], $_POST["email"], $_POST["message"]);

    $contactQuery->execute();

    echo "<script> alert ('message sent'); </script>";
}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- External stylesheet -->
    <link rel="stylesheet" href="style.css">

    <style>
        /* Header Styles */

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
            transition: background 0.3s ease;
        }

        .logo img {
            height: 50px;
            transition: transform 0.3s ease-in-out;
        }

        .logo img:hover {
            transform: scale(1.1);
        }

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

        /* Global Styles */

        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding-top: 80px;
            /* To prevent overlap with fixed header */
        }

        /* Contact Section */

        #container-contact {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        #container-contact h3 {
            color: #0077b6;
            margin-bottom: 20px;
        }

        #container-contact h1 {
            color: #054f9d;
            margin-bottom: 40px;
        }

        /* Contact Info Items */

        .item {
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            gap: 20px;
        }

        .items {
            background: #e9f7fd;
            border-radius: 10px;
            padding: 20px;
            flex: 1 1 250px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .items:hover {
            transform: translateY(-5px);
        }

        .items i {
            color: #0077b6;
            font-size: 2rem;
            margin-bottom: 10px;
            display: block;
        }

        .items h2 {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        /* Contact Form Styles */

        form .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        form .form-control:focus {
            border-color: #0077b6;
            box-shadow: 0 0 5px rgba(0, 119, 182, 0.5);
        }

        .btn-primary {
            background: linear-gradient(45deg, #054f9d, #0077b6);
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #0077b6, #054f9d);
            transform: translateY(-2px);
        }

        /* Google Map Styles */

        iframe {
            border: 0;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Responsive Adjustments */

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav {
                margin-top: 10px;
                flex-wrap: wrap;
                gap: 10px;
            }

            .item {
                flex-direction: column;
            }
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

    <main class="py-5">
        <div class="container mb-5" id="container-contact">
            <h3 class="text-center fs-4">CONTACT US</h3>
            <h1 class="text-center fs-1 mb-5">Feel Free To Contact</h1>
            <div class="item mb-3">
                <div class="items">
                    <i class="bi bi-geo-alt-fill fs-3"></i>
                    <h2>Address</h2>
                    <p>Jaulakhel</p>
                </div>
                <div class="items">
                    <i class="bi bi-telephone-fill fs-3"></i>
                    <h2>Phone</h2>
                    <p>+0123 456 789</p>
                </div>
                <div class="items">
                    <i class="bi bi-envelope-fill fs-3"></i>
                    <h2>Email</h2>
                    <p>info@ntc.com.np</p>
                </div>
            </div>

            <!-- Contact Form and Google Map Side by Side -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <form method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required name="fullname">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required name="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" required name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1926.6264633943908!2d85.31406647516451!3d27.67252936043591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ca40e02469%3A0x83add2dc2fc20418!2z4KSo4KWH4KSq4KS-4KSyIOCkn-Clh-CksuCkv-CkleCkrg!5e0!3m2!1sen!2snp!4v1741936740112!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>
</body>

</html>