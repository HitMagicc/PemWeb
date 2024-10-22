<?php
$servername = "127.0.0.1";
$port = '1401';
$username = "postgres";
$password = "admin1234!";
$dbname = "mhs";

// Create connection
$conn = pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");
//$conn = new mysqli($servername, $username, $password);
// Check connection
if (!$conn) {
  echo "An error occurred while connecting to PostgreSQL.";
  exit;
}
  // echo "Connected successfully";
?>
