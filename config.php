<?php
$host     = "127.0.0.1"; // Database Host
$user     = "root"; // Database Username
$password = ""; // Database's user Password
$database = "admin"; // Database Name
$prefix   = ""; // Database Prefix for the script tables

$mysqli = new mysqli($host, $user, $password, $database);

// Checking Connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset("utf8mb4");

$site_url             = "http://localhost";
$projectsecurity_path = "http://localhost/111/Source";
?>