<?php
$servername = "localhost";
$username   = "id12896100_pd1";
$password   = "pocketDOC";
$dbname     = "id12896100_pocketdoctor";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>