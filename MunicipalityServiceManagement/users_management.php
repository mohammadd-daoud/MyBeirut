<?php
// Include config for database connection
require_once 'config.php';

// Fetch all users except the President (Role = 1)
$query = "SELECT * FROM users WHERE Role != 1";
$stmt = $conn->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesDashboard.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
            border: 1px solid #e6e9ef;
            font-size: 15px;
        }

        th {
            background: #1a73e8;
            color: white;
            font-size: 16px;
            font-weight: 600;
        }

        tr:nth-child(odd) {
            background: #ffffff;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #e6f0ff;
        }

        /* Buttons */
        a.btn, button.btn {
            padding: 8px 15px;
            border-radius: 8px; /* Match the button shape */
            font-size: 14px;
            text-decoration: none;
            color: #fff;
            display: inline-block;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        /* Approve Button */
        a.btn.green, button.btn.green {
            background: #28a745; /* Green for Edit */
        }

        a.btn.green:hover, button.btn.green:hover {
            background: #218838; /* Darker green on hover */
        }

        /* Delete Button */
        a.btn.red, button.btn.red {
            background: #ff5252; /* Red for Delete */
        }

        a.btn.red:hover, button.btn.red:hover {
            background: #e64a19; /* Darker red on hover */
        }

        /* Back to Dashboard Button */
        .back-btn {
            background: #1a73e8;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 14px;
            border-radius: 6px;
            display: inline-block;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #0d47a1;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(13, 71, 161, 0.2);
        }
    </style>
</head>
<body>
    <!-- Include Sidebar -->
    <?php include('sidebar.php'); ?>

    <!-- Main Content Area -->
    <div class="main-content">
        <div class="dashboard-header">
            <h1>User Management</h1>
            <!-- Back to Dashboard Button -->
            <a href="dashboard.php" class="back-btn">← Back to Dashboard</a>
        </div>

        <!-- Users Table -->
        <section>
            <div class="section-header">
                <h2>Users List</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr id="user-<?php echo htmlspecialchars($user['User_ID']); ?>">
                            <td><?php echo htmlspecialchars($user['First_Name'] . ' ' . $user['Last_Name']); ?></td>
                            <td><?php echo htmlspecialchars($user['Email']); ?></td>
                            <td>
                                <?php
                                    if ($user['Role'] == 0) {
                                        echo "Citizen";
                                    } elseif ($user['Role'] > 1) {
                                        echo "Staff";
                                    }
                                ?>
                            </td>
                            <td>
                                <a href="edit_user.php?id=<?php echo htmlspecialchars($user['User_ID']); ?>" class="btn green">Edit</a>
                                <button class="btn red delete-user" data-id="<?php echo htmlspecialchars($user['User_ID']); ?>">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>

    <script>
        $(document).ready(function () {
            // Delete button click handler
            $(".delete-user").click(function () {
                const userId = $(this).data("id");

                if (confirm("Are you sure you want to delete this user?")) {
                    $.post("delete_user.php", { userId: userId }, function (response) {
                        if (response.success) {
                            alert("User deleted successfully.");
                            $(`#user-${userId}`).remove(); // Remove the row from the table
                        } else {
                            alert("Failed to delete user: " + response.message);
                        }
                    }, "json");
                }
            });
        });
    </script>
</body>
</html>
