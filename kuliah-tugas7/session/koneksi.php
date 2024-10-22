<?php
$host = "localhost";
$port = "1401";
$user = "postgres";
$password = "admin1234!";
$dbname = "session_test";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>
