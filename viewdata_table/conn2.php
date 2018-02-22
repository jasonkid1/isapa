<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sfac_als" ;

// Check Connection

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
	die("Error on the connection!" . $conn->connect_error);
}



