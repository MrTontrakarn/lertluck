<?php 

// Database configuration
$dbHost = "db";
$dbUsername = "root";
$dbPassword = "MYSQL_ROOT_PASSWORD";
$dbName = "lertluck";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>