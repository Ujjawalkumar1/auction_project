<?php
// add_item.php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'includes/auth.php'; // Ensure admin is logged in
?>

<!-- This form is embedded in the modal on add_uniquebid_auction.php -->
<h2>Add New Item</h2>
<form id="itemForm">
    <label for="itemName">Item Name:</label>
    <input type="text" id="itemName" name="itemName" required>
    <button type="submit" class="btn">Add Item</button>
</form>