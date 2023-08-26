<?php
include "conect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $job_category = $_POST["job_category"];
    $expected_job_title = $_POST["expected_job_title"];
    $expected_salary = $_POST["expected_salary"];
    $age = $_POST["age"];
    $CV = $_FILES["CV"]["name"];
    $profile_picture = $_FILES["profile_picture"]["name"];

    $sql = "INSERT INTO job_seeker_details (user_name, job_category, expected_job_title, expected_salary, age, CV, profile_picture)
            VALUES ('$user_name', '$job_category', '$expected_job_title', '$expected_salary', '$age', '$CV', '$profile_picture')";

    if ($con->query($sql) === TRUE) {
        header('Location: display.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>

<?php
include 'conect.php';
if (isset($_GET['deleteid'])) {
    $user_name = $_GET['deleteid'];

    $sql = "DELETE FROM job_seeker_details WHERE user_name = '$user_name'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Delete successful";
    } else {
        die(mysqli_error($con));
    }
}
?>
