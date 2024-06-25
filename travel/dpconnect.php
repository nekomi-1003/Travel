<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traveldb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "You are now log in";
} catch(PDOException $e) {
  echo "You are not log in " . $e->getMessage();
}
?>