<?php
include "conn.php";
include "admin_session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User Management</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #f0f2f6;
        }

        .sidebar {
            width: 250px;
            background-color: #054f9d;
            color: white;
            padding: 20px;
            position: fixed;
            height: 100vh;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #003f7d;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            width: calc(100% - 250px);
        }

        .header {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            font-size: 24px;
        }

        .search-box {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }

        input[type="text"],
        select {
            padding: 10px;
            width: 30%;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #054f9d;
            color: white;
        }

        .action-btn {
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-btn {
            background-color: #28a745;
            color: white;
            margin-right: 20px;
            text-decoration: none;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="admin_events.php">Events</a></li>
            <li><a href="admin_settings.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h2>User Management</h2>
        </div>

        <div class="search-box">
            <input type="text" id="search" placeholder="Search users...">
            <select id="role-filter">
                <option value="">All Roles</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>

        <table id="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>


                <?php
                $query_user = $mysql->query("select * from users;");
                while ($row = $query_user->fetch_assoc()) {

                    $id = $row["id"];
                    $fullname = $row["fullname"];
                    $email = $row["email"];
                    $role = $row["role"];

                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$fullname</td>";
                    echo "<td>$email</td>";
                    echo "<td>$role</td>";
                    echo "<td><a class='action-btn edit-btn' href='user_edit.php?email=$email'>Edit</a>" . "<a class='action-btn delete-btn' href='user_delete.php?email=$email'>Delete</a>";

                    // echo '<td>
                    //     <button class="action-btn edit-btn">Edit</button>
                    //     <button class="action-btn delete-btn" onclick="deleteUser(this)">Delete</button>
                    // </td>';
                }

                ?>


            </tbody>
        </table>
    </div>

    <script>
        // function deleteUser(button) {
        //     let row = button.closest("tr");
        //     row.remove();
        // }

        document.getElementById("search").addEventListener("keyup", function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll("#user-table tbody tr");
            rows.forEach(row => {
                let username = row.cells[1].textContent.toLowerCase();
                row.style.display = username.includes(filter) ? "" : "none";
            });
        });
    </script>
</body>

</html>