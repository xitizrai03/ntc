<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Nepal Telecom</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            padding-top: 80px;
        }

        .header {
            background: linear-gradient(135deg, #1a73e8, #0b5ed7);
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

        .nav a {
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            transition: all 0.3s;
            border-radius: 30px;
            background: linear-gradient(135deg, #1a73e8, #0b5ed7);
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            margin-right: 10px;
        }

        .nav a:hover {
            background: linear-gradient(135deg, #1a73e8, #0b5ed7);
            color: white;
            transform: scale(1.05);
        }

        .contact-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .footer {
            text-align: center;
            padding: 15px;
            background: #0b5ed7;
            color: white;
            margin-top: 20px;
        }

        .contact-box {
            margin-bottom: 20px;
            padding: 10px;
            border-left: 4px solid #1a73e8;
            background: #f9f9f9;
            border-radius: 5px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            width: 100%;
            padding: 10px;
            background: #1a73e8;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .contact-form button:hover {
            background: #0b5ed7;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="assets/Nepal-Telecom.jpg" alt="Nepal Telecom Logo" width="100">
        </div>
        <div class="nav">
            <a href="index1.php">Home</a>
            <a href="contactus.php">Contact Us</a>
            <a href="registration.php">Sign Up</a>
            <a href="login.php">Log In</a>
        </div>
    </div>

    <div class="container contact-container mt-5">
        <div class="contact-title">📌 Service-Related Queries & Complaints</div>

        <div class="contact-info">
            <div class="contact-box">
                <h3>📞 Customer Care</h3>
                <p><strong>Dial 1498:</strong> GSM Service related query</p>
                <p><strong>Dial 197:</strong> PSTN Inquiry</p>
            </div>

            <div class="contact-box">
                <h3>📞 IVR Services</h3>
                <p><strong>Dial 198:</strong> PSTN, ADSL & FTTH Queries</p>
                <p><strong>Dial 188:</strong> VOIP Call Complaint</p>
                <p><strong>Dial 1607:</strong> GSM PUK Inquiry</p>
            </div>

            <div class="contact-box">
                <h3>🏢 Office of Chief Commercial Officer (CCO)</h3>
                <p>Bhadrakali Plaza, Kathmandu</p>
                <p>📧 Email: cco@ntc.net.np</p>
            </div>

            <div class="contact-box">
                <h3>🏢 Office of Chief Operations Officer (COO)</h3>
                <p>Bhadrakali Plaza, Kathmandu</p>
                <p>📞 Tel: 977-1-4210203</p>
            </div>

            <div class="contact-box">
                <h3>🏢 Office of Chief Technical Officer (CTO)</h3>
                <p>Bhadrakali Plaza, Kathmandu</p>
                <p>📧 Email: cto.nsq@ntc.net.np</p>
            </div>

            <div class="contact-box">
                <h3>🏢 International Service Department (ISD)</h3>
                <p>Bhadrakali Plaza, Kathmandu</p>
                <p>📧 Email: ntsd@ntc.net.np</p>
            </div>

            <div class="contact-box">
                <h3>🏢 Telecom Training & Research Center</h3>
                <p>Babarmahal, Kathmandu</p>
                <p>📧 Email: ttc.training@ntc.net.np</p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h3>📩 Send Us a Message</h3>
            <form action="#">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea rows="4" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <div class="footer">
        © 2025 Nepal Telecom. All Rights Reserved.
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>