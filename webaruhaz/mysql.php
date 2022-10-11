<?php
$servername = "localhost";
$username = "webaruhaz2";
$password = "123456789";
$dbname = "webaruhaz2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Kapcsolódási hiba: " . mysqli_connect_error());
}
?>