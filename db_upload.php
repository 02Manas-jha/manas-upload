<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "upload_file";
$port       = "3306";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $port);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
