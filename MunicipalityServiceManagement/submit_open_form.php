<?php
session_start();
require 'config.php'; // Include the config file to establish database connection

// Check if the user is logged in
if (!isset($_SESSION['firebaseUID'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit;
}

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user ID
    $user_id = $_SESSION['firebaseUID']; // Assume this is set during login

    // Validate and sanitize input
    $form_title = 'Open Form'; // Static title for this form
    $form_type = 'open_form'; // Static type for open forms
    $form_content = isset($_POST['form_content']) ? htmlspecialchars(trim($_POST['form_content'])) : '';

    if (empty($form_content)) {
        echo json_encode(['status' => 'error', 'message' => 'Form content cannot be empty.']);
        exit;
    }

    try {
        // Insert the form submission into the database
        $stmt = $conn->prepare(
            "INSERT INTO forms (User_ID, Form_Title, Form_Type, Form_Content, Status) 
             VALUES (:user_id, :form_title, :form_type, :form_content, 'Pending')"
        );

        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $stmt->bindParam(':form_title', $form_title, PDO::PARAM_STR);
        $stmt->bindParam(':form_type', $form_type, PDO::PARAM_STR);
        $stmt->bindParam(':form_content', $form_content, PDO::PARAM_STR);

        $stmt->execute();

        // Redirect back to forms page with success message
        header('Location: forms.php?success=1');
        exit;
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
        exit;
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid form submission.']);
    exit;
}
?>
