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
        $formTitle = $_POST['form_title'] ?? 'Disaster Aid Application';
        $formType = $_POST['form_content']['disaster_type'] ?? 'disaster_aid'; // Use the selected disaster type as form type
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
        $stmt->bindParam(':formType', $formType); // Set form type dynamically based on disaster type
        $stmt->bindParam(':formContent', $formContent);
        $stmt->bindParam(':submissionDate', $submissionDate);
        $stmt->bindParam(':updatedAt', $updatedAt);

        $stmt->execute();

        // Redirect with a success message as an alert
        echo "<script>
            alert('Your disaster aid application has been submitted successfully.');
            window.location.href = 'forms.php';
        </script>";
        exit;
    } catch (Exception $e) {
        // Redirect with an error message as an alert
        echo "<script>
            alert('An error occurred while submitting your disaster aid application. Please try again.');
            window.location.href = 'applydisasteraid.php';
        </script>";
        exit;
    }
}
?>
