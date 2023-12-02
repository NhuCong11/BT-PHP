<?php
session_start(); // Start the session
session_unset(); // Unset the data
session_destroy(); // Destroy the session

header('location: login.php'); // Redirect to login page
exit();
?>