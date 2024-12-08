<?php
// Start the session
session_start();

$_SESSION['username']="Harshal";

if (!isset($_SESSION['username'])) {
    echo "Session has expired. Please log in again.";
    exit;
}


echo "Welcome, " . $_SESSION['username'] . "!<br>";
echo "You are logged in.<br>";


echo '<a href="logout.php">Logout</a>';
?>
