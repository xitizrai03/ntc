<?php
$host = "localhost";
$user = "root"; // Default XAMPP username
$pass = ""; // Default XAMPP password (leave empty)
$dbname = "ntc";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// include 'db.php';
$event_id = $_GET["event_id"];

// Fetch Events
$result = $conn->query("SELECT * FROM events where id = $event_id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
        }

        .event {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .event img {
            max-width: 100%;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="container">


        <h2 class="text-center my-4"> Events</h2>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="event">
                <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                <?php if ($row['image']): ?>
                    <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Event Image">
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>

</body>

</html>