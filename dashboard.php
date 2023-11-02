<?php


session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM user_lists WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "List Name: " . $row['list_name'] . "<br>";
        echo "List Item: " . $row['list_item'] . "<br>";
    }
}

?>
