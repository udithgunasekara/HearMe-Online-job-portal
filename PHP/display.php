<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="display.css">
</head>
<body> 

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

if (isset($_GET['updateid'])) {
    $user_name = $_GET['updateid'];
    $sql = "SELECT * FROM job_seeker_details WHERE user_name = '$user_name'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $job_category = $row["job_category"];
        $expected_job_title = $row["expected_job_title"];
        $expected_salary = $row["expected_salary"];
        $age = $row["age"];
        $CV = $row["CV"];
        $profile_picture = $row["profile_picture"];
    } else {
        echo "No data found.";
    }
}

$sql = "SELECT * FROM job_seeker_details";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="display.css">
</head>
<body> 

<!-- red color header -->
<div class="header">
    <div class="header-left">
        <span><h4>HireHUB</h4></span>
        <p class="buil">Building Bridges for <br> Career Growth</p>
    </div>
</div>
<!-- red color header -->

<!-- nav bar -->
<header>
    <nav>
      <ul class="navigation">
        <li><a href="company.html">HOME</a></li>
        <li><a href="vacancy_page.php">Vacancies</a></li>
        <li><a href="web.php">Contact US</a></li>
        <li><a href="aboutus.html">about Us</a></li>
        <li class="search">
          <form>
            <input type="text" placeholder="Search...">
            <button type="submit">Search</button>
          </form>
        </li>
      </ul>
    </nav>
</header>
<!-- nav bar -->

<div class="box2"> 
    <a href="home.php" class="cv-button">Add your CV</a>
</div>

<div class="card-container">
<?php
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $user_name = $row["user_name"];
        $job_category = $row["job_category"];
        $expected_job_title = $row["expected_job_title"];
        $expected_salary = $row["expected_salary"];
        $age = $row["age"];
        $CV = $row["CV"];
        $profile_picture = $row["profile_picture"];

        echo "<div class='card'>
                <img src='$profile_picture' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>User name: $user_name</h5>
                    <p class='card-text'>Job category: $job_category</p>
                    <p class='card-text'>Expected job title: $expected_job_title</p>
                    <p class='card-text'>Expected salary: $expected_salary</p>
                    <p class='card-text'>Age: $age</p>
                    <a href='download.php?updateid=$user_name' class='button button-update'>Update</a>
                    <a href='display.php?deleteid=$user_name' class='button button-delete'>Delete</a>
                </div>
            </div>";
    }
}
?>

</div>

<?php if (isset($_GET['updateid'])): ?>
    <div class="update-form">
        <h2>Update Job Seeker Details</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
            <div>
                <label for="job_category">Job Category:</label>
                <input type="text" name="job_category" value="<?php echo $job_category; ?>">
            </div>
            <div>
                <label for="expected_job_title">Expected Job Title:</label>
                <input type="text" name="expected_job_title" value="<?php echo $expected_job_title; ?>">
            </div>
            <div>
                <label for="expected_salary">Expected Salary:</label>
                <input type="text" name="expected_salary" value="<?php echo $expected_salary; ?>">
            </div>
            <div>
                <label for="age">Age:</label>
                <input type="text" name="age" value="<?php echo $age; ?>">
            </div>
            <div>
                <label for="CV">CV:</label>
                <input type="file" name="CV">
            </div>
            <div>
                <label for="profile_picture">Profile Picture:</label>
                <input type="file" name="profile_picture">
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
<?php endif; ?>


<footer class="footer">
    <div class="footer-content">
      <h3>About Us</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel dui sed lacus commodo posuere.</p>
    </div>
    <div class="footer-content">
      <h3>Contact Info</h3>
      <p>Email: info@example.com</p>
      <p>Phone: +1 123 456789</p>
    </div>
    <div class="footer-content search-bar">
      <h3>Search</h3>
      <form action="#" method="get">
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
      </form>
    </div>
    <div class="footer-content">
      <h3>Follow Us</h3>
      <div class="social-media">
        <!-- Add your social media icons and links here -->
      </div>
    </div>
</footer>

</body>
</html>
</body> 
