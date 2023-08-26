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

    $sql = "UPDATE job_seeker_details SET user_name = '$user_name', job_category = '$job_category',
            expected_job_title = '$expected_job_title', expected_salary = '$expected_salary', age = '$age',
            CV = '$CV', profile_picture = '$profile_picture' WHERE user_name = '$user_name'";

    if (mysqli_query($con, $sql)) {
        echo "Update successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

$user_name = $_GET['updateid'];
$sql = "SELECT * FROM job_seeker_details WHERE user_name = '$user_name'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$user_name = $row["user_name"];
$job_category = $row["job_category"];
$expected_job_title = $row["expected_job_title"];
$expected_salary = $row["expected_salary"];
$age = $row["age"];
$CV = $row["CV"];
$profile_picture = $row["profile_picture"];

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Job Seeker Details</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="box1">
        <form action="web.php?updateid=<?php echo $user_name; ?>" method="post" enctype="multipart/form-data">
            <label for="user_name">Name:</label>
            <input type="text" id="user_name" placeholder="Enter your user name" name="user_name" autocomplete="off" required value="<?php echo $user_name; ?>">

            <label for="job_category">Job Category:</label>
            <input type="text" id="job_category" placeholder="Enter your job category" name="job_category" required value="<?php echo $job_category; ?>">

            <label for="expected_job_title">Expected Job Title:</label>
            <input type="text" id="expected_job_title" placeholder="Enter your expected job title" name="expected_job_title" required value="<?php echo $expected_job_title; ?>">

            <label for="expected_salary">Expected Salary:</label>
            <input type="text" id="expected_salary" placeholder="Enter your expected salary" name="expected_salary" required value="<?php echo $expected_salary; ?>">

            <label for="age">Age:</label>
            <input type="number" id="age" placeholder="Enter your age" name="age" required value="<?php echo $age; ?>">

            <label for="CV">CV File (PDF):</label>
            <input type="file" id="CV" name="CV" accept=".pdf" required value="<?php echo $CV; ?>">

            <label for="profile_picture">Profile Picture:</label>
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*" required value="<?php echo $profile_picture; ?>">

            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
