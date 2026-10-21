<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "trojanconnect_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM organization";
$result = $conn->query($sql);
?>