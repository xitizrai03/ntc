<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="User Notifications and Services">
    <title>User Notifications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0077b6;
            --secondary-color: #005f99;
            --gradient: linear-gradient(45deg, #054f9d, #0077b6);
            --shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        body {
            background-color: #f8f9fa;
            margin: 0;
            font-family: 'Inter', sans-serif;
            color: #333;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        .header {
            background: var(--gradient);
            padding: 15px 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
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
            background: var(--gradient);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: 500;
            border-radius: 30px;
            transition: all 0.3s ease-in-out;
            box-shadow: var(--shadow);
        }

        .nav a:hover,
        .nav a.active {
            transform: translateY(-3px);
            background: var(--secondary-color);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .menu-icon {
            display: none;
            font-size: 1.8rem;
            color: white;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
            }

            .nav {
                display: none;
                flex-direction: column;
                width: 100%;
                text-align: center;
                padding-top: 10px;
            }

            .nav a {
                margin: 5px;
                padding: 8px 16px;
                display: block;
            }

            .menu-icon {
                display: block;
            }
        }

        @media (min-width: 769px) {
            .nav {
                display: flex !important;
            }
        }

        .container {
            display: flex;
            flex-direction: column;
            gap: 40px;
            padding: 40px;
            max-width: 1400px;
            margin: 120px auto 0;
        }

        .section-container {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .section {
            background: white;
            padding: 50px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            font-size: 1.5rem;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 250px;
            flex-direction: column;
        }

        .section:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .section a {
            text-decoration: none;
            color: var(--primary-color);
            transition: color 0.3s;
            margin-top: 20px;
        }

        .section a:hover {
            color: var(--secondary-color);
        }

        .content {
            display: none;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .toggle-button {
            background: var(--gradient);
            color: white;
            padding: 12px 12px;
            border: none;
            border-radius: 15px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 15px;
        }

        .toggle-button:hover {
            background: linear-gradient(45deg, #00b4d8, #0077b6);
        }

        /* Container for dynamic content */

        .dynamic-content {
            margin-top: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            /* For positioning the close button */
        }

        /* Close button for dynamic content */

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--secondary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            font-size: 1.2rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-button:hover {
            background: var(--primary-color);
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="images/logo.jpg" alt="Nepal Telecom Logo" loading="lazy">
        </div>

        <nav class="nav" id="navbar">
            <a href="2homepage.html">Home</a>
            <a href="contactus.php">Contact Us</a>
            <a href="usersetting.html">Setting</a>
            <a href="logout.html">Log Out</a>
            <a href="userprofile.php">Profile</a>

        </nav>
    </header>

    <main class="container">
        <div class="section-container">
            <section class="section" id="eventsSection">
                <div>Events and Information</div>
                <button class="toggle-button" onclick="toggleContent('eventsContent')" aria-expanded="false">Detail</button>
                <div id="eventsContent" class="content">
                    <p>Events and information content goes here.</p>
                    <button class="btn btn-primary" onclick="loadPage('userevents.html', 'dynamicContent', 'eventsSection')">View more Events</button>
                </div>
            </section>
            <section class="section" id="notificationsSection">
                <div>User Notifications</div>
                <button class="toggle-button" onclick="toggleContent('notificationsContent')" aria-expanded="false">Detail</button>
                <div id="notificationsContent" class="content">
                    <p>Notifications content goes here.</p>
                    <button class="btn btn-primary" onclick="loadPage('usernotification.html', 'dynamicContent', 'notificationsSection')">View more Notifications</button>
                </div>
            </section>
        </div>

        <!-- Container for dynamic content -->
        <div id="dynamicContent" class="dynamic-content"></div>
    </main>

    <script>
        function toggleMenu() {
            var nav = document.getElementById("navbar");
            if (nav.style.display === "flex") {
                nav.style.display = "none";
            } else {
                nav.style.display = "flex";
            }
        }

        function toggleContent(contentId) {
            var content = document.getElementById(contentId);
            var button = content.previousElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
                button.setAttribute("aria-expanded", "false");
            } else {
                content.style.display = "block";
                button.setAttribute("aria-expanded", "true");
            }
        }

        // Function to load external pages dynamically
        function loadPage(url, targetId, sectionId) {
            // Hide only the sections, not the header
            document.querySelectorAll('.section').forEach(section => {
                section.style.display = "none";
            });

            // Fetch and display the content
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById(targetId).innerHTML = `
                        <button class="close-button" onclick="restoreSections()">×</button>
                        ${data}
                    `;
                })
                .catch(error => {
                    console.error("Error loading page:", error);
                    document.getElementById(targetId).innerHTML = `
                        <button class="close-button" onclick="restoreSections()">×</button>
                        <p>Failed to load content. Please try again later.</p>
                    `;
                });
        }

        // Function to restore sections to their original state
        function restoreSections() {
            // Show all sections
            document.querySelectorAll('.section').forEach(section => {
                section.style.display = "flex";
            });

            // Clear dynamic content
            document.getElementById("dynamicContent").innerHTML = "";
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Highlight active link
            document.querySelectorAll('.nav a').forEach(link => {
                if (link.href === window.location.href) {
                    link.classList.add('active');
                }
            });

            // Event delegation for navigation links
            document.querySelector('.nav').addEventListener('click', function(e) {
                if (e.target.tagName === 'A' && window.innerWidth <= 768) {
                    document.getElementById("navbar").style.display = "none";
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>