<?php
// Include database connection
include 'db_connection.php'; // Ensure this file contains the correct connection details

// Check if the connection exists
if (!isset($conn)) {
    die("Database connection error.");
}

// Fetch events from the database
$query = "SELECT id, title, description, image FROM events ORDER BY created_at DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Event</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        /* Improved UI for Events Section */
        .event-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .event-card {
            width: 300px;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .event-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 5px;
        }
        .event-card h3 {
            margin: 10px 0;
            color: #333;
        }
        .event-card p {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="contact.php">Contact Us</a>
            <a href="logout.php">Log Out</a>
        </nav>
    </header>

    <main>
        <h2 style="text-align: center;">Main Event</h2>
        <div class="event-container">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="event-card">';
                    if (!empty($row['image'])) {
                        echo '<img src="uploads/' . htmlspecialchars($row['image']) . '" alt="Event Image">';
                    }
                    echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
                    echo '<p>' . htmlspecialchars($row['description']) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p style="text-align: center;">No events available.</p>';
            }
            ?>
        </div>
    </main>

</body>
</html>
