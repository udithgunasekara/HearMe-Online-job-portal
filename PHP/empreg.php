<?php
include_once './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $userName = $_POST["username"];
    $email = $_POST["email"];
    $passwordd = $_POST["password"];
    $cnfrmpwd = $_POST["cnfrmpwd"];
    $day = $_POST["day"];
    $mobilenumber = $_POST["mobilenumber"];

    // Validate password length
    if (strlen($passwordd) < 8) {
        echo "<script> 
        alert('Password should be at least 8 characters long.');
    </script>";
    } else {
        if ($passwordd !== $cnfrmpwd) {
            echo "<script> 
            alert('Password and confirm password do not match.');
        </script>";
        } else {
            $stmt = $con->prepare("INSERT INTO `empregiter`(`firstname`, `lastname`, `dob`, `phonenumber`, `email`, `username`, `password`) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $firstname, $lastname, $day, $mobilenumber, $email, $userName, $passwordd);

            if ($stmt->execute()) {
                echo "<script> 
            alert('Employee Registration successful!');
            window.location.href='login.php';
        </script>";
            } else {
                echo "<script> 
                alert('Registration unsuccessful. Error: " . $stmt->error . "');
            </script>";
            }

            $stmt->close();
        }
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee registration form</title>
    <link rel="stylesheet" href="./css/empreg.css">
</head>

<body>
    <div class="header">
        <div class="header-left1">
            <span>
                <h4>HireHUB</h4>
            </span>
            <p class="buil">Building Bridges for <br> Career Growth</p>
        </div>
        <div class="header-right1">

            <a href="login.php" class="btn btn-primary btn-custom me">Login</a>
            <a href="loginselectionpage.php" class="btn btn-primary btn-custom me">Register</a>
        </div>
    </div>


    <header>
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
    </header>


    <hr>


    <div class="content-wrapper">
        <div class="left-side" id="left-side-container">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img class="sliderimg" src="https://burst.shopifycdn.com/photos/resume-checklist-next-to-laptop.jpg?width=925&format=pjpg&exif=1&iptc=1" alt="this is displaying an image of a job portal"><!-- All the images are taken from online websites-->
                    <div class="text">Image One</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img class="sliderimg" src="https://agilityportal.io/images/easyblog_articles/365/Best-apps-for-employees.jpg" alt="this is displaying an image of a job portal"><!-- All the images are taken from online websites-->
                    <div class="text">Image Two</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img class="sliderimg" src="https://blog.vantagecircle.com/content/images/2020/08/Employee-recognition.png" alt="this is displaying an image of a job portal">
                    <div class="text">Image Three</div>
                </div>
            </div>
        </div>
        <br>

        <div class="right-side">
            <div class="form-container">
                <div class="logo-container">
                    <img src="https://cdn.logo.com/hotlink-ok/logo-social.png" alt="logo" height="100px" width="100px" class="logo">
                </div>
                <h6><b><u>Hire Hub</b></u></h6>
                <br><br>
                <h1>
                    <center>Please enter the details to register as an employee</center>
                </h1>
                <br>
                <br>
                <br>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <br>
                    <label>First name:</label>
                    <input type="text" name="firstname" placeholder="First Name" required><br /><br>

                    <label>Last name:</label>
                    <input type="text" name="lastname" placeholder="Last Name" required><br /><br>

                    <label>Username:</label>
                    <input type="text" name="username" placeholder="UserName" required><br /><br>

                    <label>Email:</label>
                    <input type="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br /><br />

                    <label>Password:</label>
                    <input type="password" id="password" name="password" required><br /><br />

                    <label>Re-type password:</label>
                    <input type="password" id="cnfrmpwd" name="cnfrmpwd" required><br /><br>

                    <label>DOB:</label>
                    <input type="date" name="day" id="day" required><br /><br />

                    <label>Mobile number :</label>
                    <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile number" maxlength="10" required><br /><br>

                    <br />
                    <input id="checkBox" type="checkbox" onclick="enableButton2()">T&C<br /><br />
                    <center><input type="submit" id="submitBtn" value="Submit"></center>
                </form>
            </div>
        </div>
    </div>




    <footer class="footer">
        <div class="footer-content">
            <h3>About Us</h3>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel dui sed lacus commodo posuere.</h5>
        </div>
        <div class="footer-content">
            <h3>Contact Info</h3>
            <h5>Email: info@example.com</h5>
            <h5>Phone: +1 123 456789</h5>
        </div>
        <div class="footer-content search-bar1">
            <h3>Search</h3>
            <form action="#" method="get">
                <input type="text" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <div class="social-media">

            </div>
        </div>
    </footer>

    <script src="./js/empreg.js"></script>
</body>

</html>