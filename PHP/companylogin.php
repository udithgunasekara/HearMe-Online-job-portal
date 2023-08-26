<?php
include_once './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cuname = $_POST["cuname"];
    $password = $_POST["password"];

    $stmt = $con->prepare("SELECT * FROM companyregister WHERE cuname = ?");
    $stmt->bind_param("s", $cuname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            session_start();
            $_SESSION['cuname'] = $cuname;
            header("Location: company_dashboard.php");
        } else {
            echo "<script> 
                alert('Incorrect password. Please try again.');
                window.location.href='companylogin.php';
            </script>";
        }
    } else {
        echo "<script> 
            alert('Username not found. Please try again.');
            window.location.href='companylogin.php';
        </script>";
    }

    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Company Login</title>
    <link rel="stylesheet" href="./css/companylogin.css">
</head>
<body>
    <div class="header">
        <div class="header-left1">
            <span><h4>HireHUB</h4></span>
            <p class="buil">Building Bridges for <br> Career Growth</p>
        </div>
        <div class="header-right1">
            <a href="login.php" class="btn btn-primary btn-custom me">Login</a>
            <a href="loginselectionpage.php" class="btn btn-primary btn-custom me">Register</a>
        </div>
    </div>
    <nav>
        <ul class="navigation">
            <li><a href="last_site.html">Home</a></li>
            <li><a href="vacancy_page.php">Vacancies</a></li>
            <li><a href="web.php">Contact US</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li class="search">
                <form>
                    <input type="text" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </li>
        </ul>
    </nav>
    <hr>
    <div class="content-wrapper">
        <div class="left-side" id="left-side-container">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img class="sliderimg" src="https://img.freepik.com/premium-photo/find-job-online-business-internet-networking-concept_489646-20943.jpg?w=996" alt="images related to online job portals">
                    <div class="text">Image One</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img class="sliderimg" src="https://img.freepik.com/premium-photo/online-recruiting-hiring-employee-concept-with-woman-suit-side-view-using-laptop-hologram-resume-cv-dark-background_670147-1413.jpg?w=900" alt="images related to online wejob portals">
                    <div class="text">Image Two</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img class="sliderimg" src="https://img.freepik.com/premium-photo/business-man-doing-interview-job_34200-2169.jpg?w=1200" alt="images related to online wejob portals">
                    <div class="text">Image Three</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <div class="right-side">
            <div class="container2">
                <div class="image-side">
                    <img src="../images/companylogin.png" alt="company login image">
                </div>
                <div class="form-side">
                    <h1>Company Login</h1>
                    <form action="" method="POST">
                        <label for="cuname">Username</label>
                        <input type="text" name="cuname" id="cuname" required>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/companylogin.js"></script>
</body>
</html>
