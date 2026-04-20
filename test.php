<?php
$conn = new mysqli("localhost", "root", "", "database1");

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}

echo "Connected Successfully!";
?>