<?php
session_start();
require 'config.php';

// Check if user is logged in
checkLogin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['firebaseUID']; // User's unique ID
    $formTitle = $_POST['form_title'];
    $formType = $_POST['bill_type']; // Dynamically assign form type based on bill type
    $formContent = json_encode([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'bill_number' => $_POST['bill_number'],
        'bill_type' => $_POST['bill_type'], // Save detailed bill type in content
        'amount' => $_POST['amount'],
        'card_number' => $_POST['card_number'],
        'expiry_date' => $_POST['expiry_date'],
        'cvv' => $_POST['cvv']
    ]);

    // Default form status
    $status = 'Pending';

    try {
        // Prepare SQL query to insert form data into the database
        $stmt = $conn->prepare("INSERT INTO forms (User_ID, Form_Title, Form_Type, Form_Content, Status) 
                                VALUES (:user_id, :form_title, :form_type, :form_content, :status)");
        $stmt->execute([
            ':user_id' => $userId,
            ':form_title' => $formTitle,
            ':form_type' => $formType, // Store the specific bill type
            ':form_content' => $formContent,
            ':status' => $status
        ]);

        // Redirect to the forms page after successful submission
        header("Location: forms.php?success=1");
        exit; // Ensure no further code is executed after redirection
    } catch (PDOException $e) {
        // Error response
        echo json_encode(['status' => 'error', 'message' => 'Failed to submit the form: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid form submission.']);
}
?>
