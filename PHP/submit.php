<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "onlinejob";


$conn = mysqli_connect($hostname, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$jobtitle = $_POST['jobtitle'];
$companyname = $_POST['companyname'];
$salary = $_POST['salary'];
$location = $_POST['location'];
$deadline = $_POST['deadline'];
$contact = $_POST['contact'];
$companymail = $_POST['companymail'];
$description = $_POST['description'];

$sql = "INSERT INTO `company_vacancy`(`jobtitle`, `companyname`, `salary`, `location`, `deadline`, `contact`, `companymail`, `description`) VALUES ('$jobtitle','$companyname','$salary','$location','$deadline','$contact','$companymail','$description')";
$result = $conn->query($sql);
if (mysqli_query($conn, $sql)) {
    echo "Your vacancy has been added successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
