<?php
session_start();
require_once 'config.php'; // Include your database connection configuration

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Check if the user is logged in
        if (!isset($_SESSION['firebaseUID'])) {
            throw new Exception('User not logged in');
        }

        // Retrieve the user ID from the session
        $userID = $_SESSION['firebaseUID'];

        // Get form inputs
        $formTitle = $_POST['form_title'];
        $formType = $_POST['form_content']['request_type']; // Use the specific request type
        $formContent = json_encode($_POST['form_content']); // Encode form content as JSON
        $submissionDate = date('Y-m-d H:i:s'); // Current date and time

        // Insert the form submission into the database
        $stmt = $conn->prepare(
            "INSERT INTO forms (User_ID, Form_Title, Form_Type, Form_Content, Submission_Date, updated_at) 
             VALUES (:userID, :formTitle, :formType, :formContent, :submissionDate, :updatedAt)"
        );
        $stmt->execute([
            ':userID' => $userID,
            ':formTitle' => $formTitle,
            ':formType' => $formType,
            ':formContent' => $formContent,
            ':submissionDate' => $submissionDate,
            ':updatedAt' => $submissionDate,
        ]);

        // Set success message and redirect
        $_SESSION['success_message'] = 'Your road closure or repair request has been submitted successfully.';
        header('Location: forms.php');
        exit;
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        exit;
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid form submission.']);
    exit;
}
