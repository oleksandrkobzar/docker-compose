<?php
$servername = "10.0.11.2";
$username = "user";
$password = "password";
$dbname = "compose";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "<h3>Connection is OK</h3>"

phpinfo();

$conn->close();
?>