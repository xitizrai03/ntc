<?php
// Include the session handler
include('session.php');

// Include the database connection
include('conn.php');


$sess_Email = $_SESSION["email"];

$me_query = "select * from users where email = '" . $sess_Email . "'";

$selectQuery = $mysql->query($me_query);
while ($row = $selectQuery->fetch_assoc()) {
    $me_id = $row["id"];
    $me_fullname = $row["fullname"];
    $me_email = $row["email"];
    $me_phone = $row["phone"];
    $me_dob = $row["dob"];
    $me_role = $row["role"];
    $me_ban_user = $row["ban_user"];
    // echo $us;
}

// Fetch the user's data from the database
// $email = $_SESSION['email'];
// $sql = "SELECT * FROM users WHERE email = '$email'";
// $result = mysqli_query($conn, $sql);

// if ($result) {
//     $user = mysqli_fetch_assoc($result);  // Fetch user data from the query result
// } else {
//     // Handle error if no user found or database issue
//     die("User not found or database error.");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="User Profile Page">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Inter', sans-serif;
            color: #333;
            line-height: 1.6;
        }

        .profile-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #0077b6;
            margin-bottom: 20px;
        }

        .profile-name {
            font-size: 2rem;
            font-weight: 700;
            color: #0077b6;
            margin-bottom: 10px;
        }

        .profile-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .profile-details div {
            background: #f1f1f1;
            padding: 15px;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 500;
        }

        .profile-details div span {
            font-weight: 600;
            color: #0077b6;
        }


        button {
            padding: 12px 24px;
            background-color: #054f9d;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #003f7d;
        }

        @media (max-width: 768px) {
            .profile-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <!-- Profile Header -->
        <div class="profile-header">
            <h1 class="profile-name"><?php echo $me_fullname; ?></h1>
            <p>Welcome to your profile page!</p>
        </div>

        <!-- Profile Details -->
        <div class="profile-details">
            <div>
                <span>Email:</span> <?php echo $me_email; ?>
            </div>
            <div>
                <span>Phone:</span> <?php echo $me_phone; ?>
            </div>
            <div>
                <span>Address:</span>Jaulakhel
            </div>
            <div>
                <span>Date of Birth:</span> <?php echo $me_dob; ?>
            </div>
            <div>
                <span>Department:</span> NTC
            </div>
            <div>
                <span>Role:</span> <?php echo $me_role; ?>
            </div>
            <div>
                <span>Employee ID:</span> <?php echo $me_id; ?>
            </div>
            <div>
                <span>Ban Status:</span> <?php echo $me_ban_user; ?>
            </div>
            <div>
                <button onclick="window.location.href='user_edit.php?email=<?php echo $me_email; ?>';">Setting</button>
            </div>
        </div>
    </div>
    <!-- <script>
        async function fetchUserProfile() {
            try {
                const response = await fetch('http://localhost/userprofile/db_connection.php');
                const userData = await response.json();

                // Populate the profile page with user data
                document.querySelector('.profile-photo').src = userData.photo_url;
                document.querySelector('.profile-name').textContent = userData.name;
                document.querySelector('.profile-details').innerHTML = `
                    <div><span>Email:</span> ${userData.email}</div>
                    <div><span>Phone:</span> ${userData.phone}</div>
                    <div><span>Address:</span> ${userData.address}</div>
                    <div><span>Date of Birth:</span> ${userData.dob}</div>
                    <div><span>Department:</span> ${userData.department}</div>
                    <div><span>Job Title:</span> ${userData.job_title}</div>
                    <div><span>Employee ID:</span> ${userData.employee_id}</div>
                    <div><span>Join Date:</span> ${userData.join_date}</div>
                `;
            } catch (error) {
                console.error('Error fetching user profile:', error);
            }
        }

        // Call the function when the page loads
        document.addEventListener('DOMContentLoaded', fetchUserProfile);
    </script> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>