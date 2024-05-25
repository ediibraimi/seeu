<?php
$user = "root";
$pass = "";
$server = "localhost";
$dbname = "e3a";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
    // Set PDO to throw exceptions on error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Set default fetch mode to associative array
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Output the error message
    echo "Connection failed: " . $e->getMessage();
    // Stop further execution if connection fails
    exit();
}
?>
