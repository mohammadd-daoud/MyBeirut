<?php
session_start();

$host = '127.0.0.1';
$db = 'mybeirut';
$user = 'root';
$password = '';

try {
    // Database connection using PDO
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Disable emulation for better security
} catch (PDOException $e) {
    // Return a JSON error message on failure
    die(json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $e->getMessage()]));
}

// Function to check if the user is logged in
function checkLogin() {
    if (!isset($_SESSION['firebaseUID'])) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
        exit;
    }
}

// Optionally, you can include helper functions here if needed
?>
