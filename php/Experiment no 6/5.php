<?php
// Server name
$server_name = $_SERVER['SERVER_NAME'];

// Name of the current script
$script_name = $_SERVER['SCRIPT_NAME'];

// IP address of the server
$server_ip = $_SERVER['SERVER_ADDR'];

// Request method (e.g., GET, POST)
$request_method = $_SERVER['REQUEST_METHOD'];

// Server protocol (e.g., HTTP/1.1)
$server_protocol = $_SERVER['SERVER_PROTOCOL'];

// Display the details
echo "<h2>Server Details</h2>";
echo "Server Name: " . $server_name . "<br>";
echo "Script Name: " . $script_name . "<br>";
echo "Server IP Address: " . $server_ip . "<br>";
echo "Request Method: " . $request_method . "<br>";
echo "Server Protocol: " . $server_protocol . "<br>";
?>
