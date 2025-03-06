<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f4f4f9;
            overflow-x: hidden;
            padding-top: 80px;
            /* To avoid overlap with fixed header */
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
        /* Contact Section */
        
        .contact-section {
            padding: 50px 0;
        }
        
        .map {
            height: 400px;
            width: 100%;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>

    <!-- Header (Navigation Bar) -->
    <div class="header">
        <div class="logo">
            <img src="images/logo.jpg" alt="Logo">
            <!-- Replace with your logo image -->
        </div>
        <div class="nav">
            <a href="index1.php">Home</a>
            <a href="contactus.php">Contact Us</a>
            <a href="registration.php">Sign Up</a>
            <a href="login.php">Log In</a>
        </div>
    </div>

    <!-- Contact Us Section -->
    <div class="container contact-section">
        <h2 class="text-center mb-4"></h2>
        <a href="contactus.php"> </a>

        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Write your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="index1.php"> </a>
                </form>
            </div>

            <!-- Image Section -->
            <div class="col-md-6">
                <h4 class="mb-3">Our Location</h4>
                <div class="map" style="background-image: url('images/ntcmap.png');"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>