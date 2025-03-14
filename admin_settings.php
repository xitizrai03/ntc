<?php
include "conn.php";

include "admin_session.php";
$role = "admin";

if (isset($_POST["btn_change_password"]) && isset($_POST["change_email"]) && isset($_POST["change_password"])) {
    $passwordQuery = $mysql->prepare("UPDATE users SET password = ? where email = ? and role=?");

    $passwordQuery->bind_param("sss", $_POST["change_password"], $_POST["change_email"], $role);

    $passwordQuery->execute();
}

if (isset($_POST["btn_ban_user"]) && isset($_POST["ban_email"]) && isset($_POST["ban_status"])) {
    $passwordQuery = $mysql->prepare("UPDATE users SET ban_user = ? where email=? ");

    $passwordQuery->bind_param("ss", $_POST["ban_status"], $_POST["ban_email"]);

    $passwordQuery->execute();
}

if (isset($_POST["btn_create_admin"]) && isset($_POST["admin_email"])  && isset($_POST["admin_role"])) {
    $passwordQuery = $mysql->prepare("UPDATE users SET role = ? where email=? ");

    $passwordQuery->bind_param("ss", $_POST["admin_role"], $_POST["admin_email"]);

    $passwordQuery->execute();
}
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
            font-size: 22px;
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

        .settings-container {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .settings-container h3 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #054f9d;
        }

        label {
            font-size: 14px;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            padding: 12px;
            background-color: #054f9d;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #003f7d;
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
            <h2>Settings</h2>
        </div>

        <div class="settings-container">
            <div class="section">
                <h3>Security Settings</h3>
                <form action="" method="post">
                    <label for="change-password">Admin Email</label>
                    <input type="email" id="change-password" placeholder="Enter Email to Change Password" name="change_email">

                    <label for="change-password">Change Admin Password</label>
                    <input type="password" id="change-password" placeholder="Enter new password" name="change_password">
                    <button type="submit" name="btn_change_password" class="btn btn-primary">Update</button>

                </form>

                <br><br>
                <form action="" method="post">
                    <label for="ban-user">Ban or Un-Ban User (Enter Email)</label>
                    <input type="email" id="ban-user" placeholder="Enter email to ban" name="ban_email">
                    <label for="ban-user">Set Status</label>
                    <select name="ban_status">
                        <option value="true">Ban</option>
                        <option value="false">Un-Ban</option>
                    </select>
                    <button type="submit" class="btn btn-primary" name="btn_ban_user">Update</button>
                </form>


                <br><br>
                <form action="" method="post">
                    <label for="ban-user">Create Admin (Enter Email)</label>
                    <input type="email" id="ban-user" placeholder="Enter email to Create Admin" name="admin_email">
                    <label for="ban-user">Set Status</label>
                    <select name="admin_role">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    <button type="submit" class="btn btn-primary" name="btn_create_admin">Update</button>
                </form>

            </div>
        </div>


    </div>

    <script>


    </script>
</body>

</html>