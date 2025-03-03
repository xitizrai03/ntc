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
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
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
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kshitij Rai</td>
                    <td>kshitijrai@gmail.co.com</td>
                    <td>Admin</td>
                    <td>
                        <button class="action-btn edit-btn">Edit</button>
                        <button class="action-btn delete-btn" onclick="deleteUser(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>xitij Rai</td>
                    <td>xitijrai@gmail.co.com</td>
                    <td>Admin</td>
                    <td>
                        <button class="action-btn edit-btn">Edit</button>
                        <button class="action-btn delete-btn" onclick="deleteUser(this)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function deleteUser(button) {
            let row = button.closest("tr");
            row.remove();
        }

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