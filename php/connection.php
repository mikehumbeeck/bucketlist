<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "accounts";
define('ROOT_URL', "http://localhost/vrije-opdracht/");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);  // Check connection

?>