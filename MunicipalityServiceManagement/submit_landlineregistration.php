<?php
require_once 'config.php'; // Include your database configuration file

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Check if user is logged in
        if (!isset($_SESSION['firebaseUID'])) {
            throw new Exception("User not logged in.");
        }

        $userId = $_SESSION['firebaseUID'];
        $formTitle = $_POST['form_title'] ?? 'Landline Registration';
        $formType = $_POST['form_content']['landline_plan'] ?? 'landline_registration'; // Use selected plan as form type
        $formContent = json_encode($_POST['form_content'], JSON_UNESCAPED_UNICODE); // JSON-encode the form content
        $submissionDate = date('Y-m-d H:i:s');
        $updatedAt = $submissionDate;

        // Insert the form data into the database
        $stmt = $conn->prepare(
            "INSERT INTO forms (User_ID, Form_Title, Form_Type, Form_Content, Status, Submission_Date, updated_at) 
            VALUES (:userId, :formTitle, :formType, :formContent, 'Pending', :submissionDate, :updatedAt)"
        );
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':formTitle', $formTitle);
        $stmt->bindParam(':formType', $formType);
        $stmt->bindParam(':formContent', $formContent);
        $stmt->bindParam(':submissionDate', $submissionDate);
        $stmt->bindParam(':updatedAt', $updatedAt);

        $stmt->execute();

        // Redirect with a success message as an alert
        echo "<script>
            alert('Your landline registration has been submitted successfully.');
            window.location.href = 'forms.php';
        </script>";
        exit;
    } catch (Exception $e) {
        // Redirect with an error message as an alert
        echo "<script>
            alert('An error occurred while submitting your landline registration. Please try again.');
            window.location.href = 'landlineregistration.php';
        </script>";
        exit;
    }
}
?>
