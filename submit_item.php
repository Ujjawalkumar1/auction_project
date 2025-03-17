<?php
// submit_item.php
session_start();
include 'includes/db.php';
header('Content-Type: application/json');

if (!isset($_SESSION['admin'])) {
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
    exit();
}

$itemName = $_POST['itemName'];

// Check if the item already exists
$stmt = $conn->prepare("SELECT id FROM items WHERE name = ?");
$stmt->bind_param("s", $itemName);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo json_encode(['status' => 'error', 'message' => 'Item already exists']);
    $stmt->close();
    $conn->close();
    exit();
}

// Insert the new item into the database
$stmt = $conn->prepare("INSERT INTO items (name) VALUES (?)");
$stmt->bind_param("s", $itemName);

if ($stmt->execute()) {
    $newItemId = $stmt->insert_id;
    echo json_encode(['status' => 'success', 'itemId' => $newItemId, 'itemName' => $itemName]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to add item']);
}

$stmt->close();
$conn->close();
?>