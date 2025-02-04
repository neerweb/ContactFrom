<?php
// Database connection settings
$serverName = "YOUR_SERVER_NAME"; // e.g., "localhost\SQLEXPRESS" or "localhost"
$connectionOptions = array(
    "Database" => "ContactFormApp", // Database name
    "Uid" => "YOUR_USERNAME",       // Replace with your SQL Server username
    "PWD" => "YOUR_PASSWORD"        // Replace with your SQL Server password
);

// Connect to the database
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check if the connection was successful
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
