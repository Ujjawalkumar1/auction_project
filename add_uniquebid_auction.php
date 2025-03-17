<?php
session_start();
include 'includes/auth.php'; // Ensure admin is logged in
include 'includes/db.php'; // Database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction Item Selection</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Logout Button -->
    <a href="admin/logout.php" class="logout-btn">Logout</a>

    <div class="container">
        <h1>Add Auction</h1>
        <form id="auctionForm">
            <!-- Custom List of Items with Delete Buttons -->
            <label for="itemList">Select Item:</label>
            <div id="itemList">
                <?php
                // Fetch items from the database
                $query = "SELECT * FROM items";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <div class='item' data-id='{$row['id']}'>
                        <span>{$row['name']}</span>
                        <button class='delete-btn' data-id='{$row['id']}'>Delete</button>
                    </div>";
                }
                ?>
            </div>

            <!-- Add New Item Button -->
            <button type="button" id="addItemButton" class="btn">Add New Item</button>

            <!-- Submit Auction Button -->
            <input type="submit" value="Submit Auction" class="btn">
        </form>

        <!-- Add New Item Modal -->
        <div id="addItemModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Add New Item</h2>
                <form id="itemForm">
                    <label for="itemName">Item Name:</label>
                    <input type="text" id="itemName" name="itemName" required>
                    <button type="submit" class="btn">Add Item</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>