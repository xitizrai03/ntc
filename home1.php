<?php include "conn.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="User Notifications and Services">
    <title>User Notifications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@$5/themes.css" rel="stylesheet" type="text/css" />

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

        .dynamic-content {
            margin-top: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

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

        /* Added border for events */
        .event-list-item {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="images/logo.jpg" alt="Nepal Telecom Logo" loading="lazy">
        </div>

        <nav class="nav" id="navbar">
            <a href="home1.php">Home</a>
            <a href="contactus.php">Contact Us</a>
            <a href="userprofile.php">Profile</a>
            <a href="logout.php">Log Out</a>
        </nav>
    </header>

    <main class="container">
        <div class="section-container">
            <!-- Main Event Section -->
            <section class="section" id="eventsSection">
                <h2>Main Event</h2>
                <?php
                $eventQuery = "SELECT * FROM events ORDER BY created_at DESC LIMIT 1"; // Fetch the most recent event
                $result = $mysql->query($eventQuery);
                if ($row = $result->fetch_assoc()) {
                    $title = $row['title'];
                    $description = $row['description'];
                    $image = $row['image'];
                    $created_at = $row['created_at'];
                ?>
                    <div class="event-list-item">
                        <img src="<?php echo $image; ?>" alt="Event Image" class="img-fluid">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $description; ?></p>
                        <span class="text-muted"><?php echo $created_at; ?></span>
                    </div>
                <?php
                }
                ?>
            </section>
            
            <!-- Section for Buttons -->
            <section>
                <div>
                    <button class="toggle-button" onclick="toggleContent('eventsContent')">Events</button>
                    <button class="toggle-button" onclick="toggleContent('demo2Content')">Demo2</button>
                    <button class="toggle-button" onclick="toggleContent('demo3Content')">Demo3</button>
                </div>
            </section>

            <!-- Dynamic Content Section -->
            <div id="eventsContent" class="dynamic-content">
                <h2>Events Section</h2>
                <ul class="list bg-base-100 rounded-box shadow-md">
                    <?php
                    $eventQuery = "SELECT * FROM events ORDER BY created_at DESC";
                    $result = $mysql->query($eventQuery);
                    while ($row = $result->fetch_assoc()) {
                        $title = $row['title'];
                        $description = $row['description'];
                        $image = $row['image'];
                        $created_at = $row['created_at'];
                    ?>
                        <li class="event-list-item">
                            <img src="<?php echo $image; ?>" alt="Event Image" class="img-fluid">
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $description; ?></p>
                            <span class="text-muted"><?php echo $created_at; ?></span>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

            <!-- Demo2 Content Section -->
            <div id="demo2Content" class="dynamic-content">
                <h2>Demo2 Section</h2>
                <p>This is content for Demo2.</p>
            </div>

            <!-- Demo3 Content Section -->
            <div id="demo3Content" class="dynamic-content">
                <h2>Demo3 Section</h2>
                <p>This is content for Demo3.</p>
            </div>
        </div>
    </main>

    <script>
        function toggleContent(contentId) {
            const sections = document.querySelectorAll('.dynamic-content');
            sections.forEach((section) => {
                if (section.id === contentId) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        }

        // Set the default content to be shown as 'eventsContent'
        toggleContent('eventsContent');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
