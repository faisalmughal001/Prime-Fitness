<?php
$servername = "localhost";
$username = "root"; // Change this if needed
$password = "";
$database = "product_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
