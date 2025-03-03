<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
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

        .section {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="admin.html">Dashboard</a></li>
            <li><a href="users.html">Users</a></li>
            <li><a href="settings.html">Settings</a></li>
            <li><a href="logout.html">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h2>Settings</h2>
        </div>

        <div class="settings-container">

            <!-- Website Settings -->
            <div class="section">
                <h3>Website Settings</h3>
                <label for="site-title">Website Title</label>
                <input type="text" id="site-title" placeholder="Enter website title">

                <label for="registration">User Registration</label>
                <select id="registration">
                    <option value="enabled">Enabled</option>
                    <option value="disabled">Disabled</option>
                </select>

                <label for="seo-keywords">SEO Keywords</label>
                <input type="text" id="seo-keywords" placeholder="Enter SEO keywords">
            </div>

            <!-- Security Settings -->
            <div class="section">
                <h3>Security Settings</h3>
                <label for="change-password">Change Admin Password</label>
                <input type="password" id="change-password" placeholder="Enter new password">

                <label for="2fa">Enable Two-Factor Authentication</label>
                <select id="2fa">
                    <option value="enabled">Enabled</option>
                    <option value="disabled">Disabled</option>
                </select>

                <label for="ban-user">Ban User (Enter Email)</label>
                <input type="email" id="ban-user" placeholder="Enter email to ban">
            </div>

            <!-- Content Management -->
            <div class="section">
                <h3>Content Management</h3>
                <button onclick="window.location.href='manage_pages.html';">Manage Pages</button>
                <button onclick="window.location.href='manage_posts.html';">Manage Blog Posts</button>
                <button onclick="window.location.href='manage_media.html';">Manage Media</button>
            </div>

            <!-- System Logs -->
            <div class="section">
                <h3>System Logs & Reports</h3>
                <button onclick="window.location.href='activity_logs.html';">View User Activity Logs</button>
                <button onclick="window.location.href='error_logs.html';">View Error Logs</button>
            </div>

            <!-- Backup & Restore -->
            <div class="section">
                <h3>Backup & Restore</h3>
                <button onclick="alert('Backup Started!')">Backup Now</button>
                <button onclick="alert('Restore in Progress!')">Restore from Backup</button>
            </div>

        </div>
    </div>

</body>

</html>