<?php
$servername = "localhost:3306";
$db_username = "root";
$password = "";
$dbname = "contactus";

$conn = new mysqli($servername, $db_username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

