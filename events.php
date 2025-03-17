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
include 'conn.php';

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = null;

    // Handle Image Upload
    if (!empty($_FILES['image']['name'])) {
        $image = 'uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    // Insert Event into Database
    $stmt = $conn->prepare("INSERT INTO events (title, description, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $image);
    $stmt->execute();
    $stmt->close();
}

// Fetch Events
$result = $conn->query("SELECT * FROM events ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@$5/themes.css" rel="stylesheet" type="text/css" />
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
        <h2 class="text-center my-4">Post a New Event</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Upload Image (Optional)</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Post Event</button>
        </form>
        <br><br>

        <section>
            <ul class="list bg-base-100 rounded-box shadow-md">

                <?php
                $eventQuery = "select * from events  ORDER BY created_at DESC";

                $selectQuery = $mysql->query($eventQuery);
                while ($row = $selectQuery->fetch_assoc()) {
                    $id = $row["id"];
                    $title = $row["title"];
                    $description = $row["description"];
                    $image = $row["image"];
                    $created_at = $row["created_at"];


                ?>
                    <li class="list-row">
                        <div><img class="size-10 rounded-box" src="<?php echo $image; ?>" /></div>
                        <div>
                            <div><?php echo $title; ?></div>
                            <div class="text-xs uppercase font-semibold opacity-60"><?php echo $created_at; ?></div>
                        </div>
                        <p class="list-col-wrap text-xs">
                            <?php echo $description; ?>
                        </p>
                        <button class="btn btn-square btn-ghost">
                            <a href="view_events.php?event_id=<?php echo $id; ?>">
                                <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                        <path d="M6 3L20 12 6 21 6 3z"></path>
                                    </g>
                                </svg>
                            </a>
                        </button>
                        <button class="btn btn-square btn-ghost">
                            <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                                </g>
                            </svg>
                        </button>
                    </li>

                <?php   } ?>




            </ul>
        </section>
    </div>

</body>

</html>