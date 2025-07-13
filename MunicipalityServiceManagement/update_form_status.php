<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formID = $_POST['id'];
    $status = $_POST['status'];

    try {
        $stmt = $conn->prepare("UPDATE forms SET Status = :status WHERE Form_ID = :id");
        $stmt->execute([':status' => $status, ':id' => $formID]);

        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}
