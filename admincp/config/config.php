<?php
$servername = "localhost";
$username = "root";
$password = "";
$namedb="order";

$mysqli = new mysqli($servername, $username, $password, $namedb);


if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
// echo "Connected successfully";
?>