<?php
$servername = getenv("DB_HOST") ?: "localhost";
$username = getenv("DB_USER") ?: "your_database_user";
$password = getenv("DB_PASSWORD") ?: "your_database_password";
$dbname = getenv("DB_NAME") ?: "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed.");
}
?>
