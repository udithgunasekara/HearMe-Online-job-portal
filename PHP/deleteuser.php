<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $username = $_GET['userID'];
    $username = filter_var($username, FILTER_SANITIZE_STRING);

    require("connection.php");

    $query = "DELETE FROM employee WHERE username = '$username'";
    $result = $connection->query($query);

    if ($result == TRUE) {
        if ($connection->affected_rows > 0) {
            echo "User with username: $username deleted successfully.";
        } else {
            echo "Invalid username.";
        }
    } else {
        echo "Error deleting user: " . $connection->error;
    }

    $connection->close();
}
?>

