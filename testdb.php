<?php
$servername = "sql111.infinityfree.com";
$username = "if0_39218828";
$password = "4ylyXgayH0T";
$dbname = "if0_39218828_gallery_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
