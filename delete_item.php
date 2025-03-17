<?php
// delete_item.php
session_start();
include 'includes/db.php';
header('Content-Type: application/json');

if (!isset($_SESSION['admin'])) {
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
    exit();
}

$itemId = $_POST['itemId'];

// Delete the item from the database
$stmt = $conn->prepare("DELETE FROM items WHERE id = ?");
$stmt->bind_param("i", $itemId);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to delete item']);
}

$stmt->close();
$conn->close();
?>