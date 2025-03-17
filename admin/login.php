<?php
// admin/login.php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'password') {
        $_SESSION['admin'] = true;
        header('Location: ../add_uniquebid_auction.php');
    } else {
        echo "Invalid credentials!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Admin Login</h1>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>