<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "parkly_db";
$port = 3306;


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
