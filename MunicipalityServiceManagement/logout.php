<?php
// Start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Destroy all session data
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the login page
header("Location: signin.php");
exit();
?>
