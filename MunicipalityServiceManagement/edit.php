<?php
// Include config for database connection
require_once 'config.php';

// Define role titles
$roleTitles = [
    0 => 'Citizen',
    2 => 'Electrician',
    3 => 'Water Supply Manager',
    4 => 'Waste Management Officer',
    5 => 'Road Maintenance Worker',
    6 => 'Public Park Supervisor'
];

// Get the user ID from the URL
$userID = isset($_GET['id']) ? $_GET['id'] : null;

if (!$userID) {
    echo "No ID provided!";
    exit;
}

// Fetch user details from the database
$query = "SELECT * FROM users WHERE User_ID = :userID";
$stmt = $conn->prepare($query);
$stmt->execute([':userID' => $userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "User not found!";
    exit;
}

// Handle form submission for updating user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newRole = isset($_POST['role']) ? intval($_POST['role']) : $user['Role'];

    $updateQuery = "UPDATE users SET Role = :role WHERE User_ID = :userID";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->execute([':role' => $newRole, ':userID' => $userID]);

    // Redirect back to the dashboard
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f4f8fb;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .edit-form {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }
        .edit-form h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #1a73e8;
        }
        .edit-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .edit-form select, .edit-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .edit-form button {
            background: #1a73e8;
            color: #fff;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
        }
        .edit-form button:hover {
            background: #155ab6;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #1a73e8;
            border-radius: 8px;
            font-size: 16px;
            background-color: #fff;
            color: #333;
            outline: none;
            appearance: none; /* Removes default arrow on some browsers */
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        select:hover {
            border-color: #0d47a1;
        }
        select:focus {
            border-color: #1a73e8;
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.3);
        }
        select option {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="edit-form">
        <h1>Edit User Role</h1>
        <form method="POST">
            <label for="role">Role:</label>
            <select name="role" id="role">
                <?php foreach ($roleTitles as $role => $title): ?>
                    <option value="<?php echo $role; ?>" <?php echo $user['Role'] == $role ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($title); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
