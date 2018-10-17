<?php
$servername = "192.168.1.6";
$username = "alex";
$password = "{sk8rboi}";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
