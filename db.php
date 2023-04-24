<?php
$hostName = "phpmya.mysql.database.azure.com";
$userName = "vamsibro";
$password = "UCv2M10widqAQn3";
$databaseName = "project";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>