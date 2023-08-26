<?php
include_once './config.php';

session_start();
if (isset($_SESSION['empid'])) {
    $empid = $_SESSION['empid'];

    $deleteSql = "DELETE FROM empregiter WHERE empid = ?";
    $stmt = $con->prepare($deleteSql);
    $stmt->bind_param("i", $empid);

    if ($stmt->execute()) {
        echo "Employee deleted successfully.";
       
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
} else {
    echo "Employee ID not found.";
}
