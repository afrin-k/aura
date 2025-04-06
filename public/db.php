<?php
$host = "localhost"; // this is your local MySQL server
$dbname = "aura";     // create this in phpMyAdmin
$username = "root";   // default for XAMPP
$password = "";       // default is blank

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>