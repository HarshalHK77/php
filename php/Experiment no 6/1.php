<?php
// 1. Set the cookie with a short expiry time
$cookie_name = "user";
$cookie_value = "Harshal";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

// 2. Retrieve and display the cookie value
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

// 3. Update the cookie with a new value and longer expiry time
setcookie("user", "Hari Kumbhar", time() + (86400 * 30), "/");

// Display the updated cookie value
if (isset($_COOKIE["user"])) {
    echo "Updated User is: " . $_COOKIE["user"] . "<br>";
}

// 4. Delete the cookie by setting its expiry time to the past
setcookie("user", "", time() - 3600, "/");

// Check if the cookie is deleted
if (isset($_COOKIE["user"])) {
    echo "User is: " . $_COOKIE["user"] . "<br>";
} else {
    echo "User cookie is deleted.";
}
?>
