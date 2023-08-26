<?php
include_once './config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_SESSION['empid'])) {
    $empid = $_SESSION['empid'];
    

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $dob = $_POST['day'];
    $email = $_POST['email'];
    $phonenumber = $_POST['mobilenumber'];
    $password = $_POST['password'];


    $updateSql = "UPDATE empregiter SET firstname=?, lastname=?, username=?, phonenumber=?, dob=?, email=?, password=? WHERE empid=?";
    $stmt = $con->prepare($updateSql);
    $stmt->bind_param("sssssssi", $firstname, $lastname, $username,$phonenumber,$dob,$email,$password, $empid);
    
    if ($stmt->execute()) {
        echo "<script> 
        alert('Employee Details updated successfully');
        window.location.href='homepage.php';
    </script>";
    } else {
      echo "Error updating record: " . $stmt->error;
    }
  } else {
    echo "Employee ID not found.";
  }
}
