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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

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
        
        .container {
            max-width: 1400px;
            margin: 120px auto 0;
            padding: 40px;
        }
        
        .section-header {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .tab-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .tab-buttons button {
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 20px;
            background: var(--gradient);
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        
        .tab-buttons button.active,
        .tab-buttons button:hover {
            background: var(--secondary-color);
        }
        
        .filter-section {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .filter-section input {
            width: 50%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
        }
        
        .event-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .event-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="images/logo.jpg" alt="Nepal Telecom Logo" loading="lazy">
        </div>
        <nav class="nav">
            <a href="home1.php">Home</a>
            <a href="userprofile.php">Profile</a>
            <a href="contactus.php">Contact Us</a>
            <a href="logout.php">Log Out</a>
        </nav>
    </header>

    <main class="container">
        <div class="section-header">Events and Information</div>

        <div class="tab-buttons">
            <button id="events-btn" class="active" onclick="showSection('events')">Events</button>
            <button id="info-btn" onclick="showSection('info')">Information</button>
        </div>

        <div class="filter-section">
            <input type="text" id="search" class="form-control" placeholder="Search events..." onkeyup="filterEvents()">
        </div>

        <div id="events-section">
            <div class="event-list" id="event-list">
                <?php
                $eventQuery = "SELECT * FROM events ORDER BY created_at DESC";
                $selectQuery = $mysql->query($eventQuery);
                while ($row = $selectQuery->fetch_assoc()) {
                    $title = $row["title"];
                    $description = $row["description"];
                    $created_at = $row["created_at"];
                ?>
                    <div class="event-item">
                        <strong class="event-title"><?php echo $title; ?></strong>
                        <div class="text-xs opacity-60">
                            <?php echo $created_at; ?>
                        </div>
                        <p>
                            <?php echo $description; ?>
                        </p>
                    </div>
                    <?php } ?>
            </div>
        </div>

        <div id="info-section" style="display: none;">
            <p>General information will be displayed here...</p>
        </div>
    </main>

    <script>
        function showSection(section) {
            document.getElementById('events-section').style.display = (section === 'events') ? 'block' : 'none';
            document.getElementById('info-section').style.display = (section === 'info') ? 'block' : 'none';
            document.getElementById('events-btn').classList.toggle('active', section === 'events');
            document.getElementById('info-btn').classList.toggle('active', section === 'info');
        }

        function filterEvents() {
            let searchInput = document.getElementById("search").value.toLowerCase();
            let events = document.querySelectorAll(".event-item");
            events.forEach(event => {
                let title = event.querySelector(".event-title").textContent.toLowerCase();
                event.style.display = title.includes(searchInput) ? "block" : "none";
            });
        }
    </script>
</body>

</html>