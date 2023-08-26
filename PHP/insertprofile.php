
<?php
$servername = "localhost:3306";
$db_username = "root";
$password = "";
$dbname = "contactus";

$conn = new mysqli($servername, $db_username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Retrieve form inputs
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$semail = $_POST['email'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$username = $_POST['username'];
$description = $_POST['description'];
$experience = $_POST['experience'];

// Insert data into the database
$sql = "INSERT INTO employee (firstname,lastname,email,dob,contact,password,username,description,experience)
        VALUES ('$firstname', '$lastname', '$email', '$dob', $contact,'$password','$username', '$description','$experience')";

if (mysqli_query($conn, $sql)) {
    echo "Your vacancy has been added successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}
