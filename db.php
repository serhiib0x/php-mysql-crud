<?php
session_start();

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$db   = getenv('DB_NAME');

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

?>
