<?php
// Include config for database connection
require_once 'config.php';

// Get the raw POST data
$input = file_get_contents("php://input");
$data = json_decode($input, true);

if (!isset($data['userId'])) {
    echo json_encode(['success' => false, 'message' => 'No user ID provided.']);
    exit;
}

$userId = $data['userId'];

try {
    // Delete user from the database
    $query = "DELETE FROM users WHERE User_ID = :userId";
    $stmt = $conn->prepare($query);
    $stmt->execute([':userId' => $userId]);

    if ($stmt->rowCount() > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'User not found.']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
