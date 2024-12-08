<?php
// 1. Start the session 
session_start();

// 2. Create session variables
$_SESSION["username"] = "Harshalk";
$_SESSION["email"] = "harshalkumbhar712@gmail.com";

echo "Session variables are set.<br>";

// 3. Access session variables
if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Email: " . $_SESSION["email"] . "<br>";
} else {
    echo "No session variables are set.<br>";
}

// 4. Destroy the session 
session_unset(); 
echo "All session variables are unset.<br>";

// Destroy the session
session_destroy();
echo "Session is destroyed.";
?>
