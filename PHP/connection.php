<?php
$servername = "localhost";
$username1 = "root";
$password = "";
$database = "onlinejob";

$connection = new mysqli($servername, $username1, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}

?>
