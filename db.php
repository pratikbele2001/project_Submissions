<?php
$host = 'your_db_host';
$user = 'your_db_user';
$password = 'your_db_password';
$database = 'personalized_lists';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
