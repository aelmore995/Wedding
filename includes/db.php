<?php
$username = 'pi';
$password = 'Aceman995!';
$host     = 'localhost';
$database = 'wedding';

$db = mysqli_connect($host, $username, $password, $database);

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
