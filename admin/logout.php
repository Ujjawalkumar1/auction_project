<?php
// admin/logout.php
session_start(); // Start the session (if not already started)
session_destroy(); // Destroy all session data
header('Location: login.php'); // Redirect to the login page
exit();
?>