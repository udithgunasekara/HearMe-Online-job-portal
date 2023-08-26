<?php
include_once './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $compid	 = $_POST["compid"];
    $compname = $_POST["compname"];
    $location = $_POST["location"];
    $email = $_POST["email"];
    $description = $_POST["description"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cnfrmpwd = $_POST["cnfrmpwd"];

    // Validate password length
    if (strlen($password) < 8) {
        echo "<script> 
        alert('Password should be at least 8 characters long.');
    </script>";
    } else {
        if ($password !== $cnfrmpwd) {
            echo "<script> 
            alert('Password and confirm password do not match.');
        </script>";
        } else {
            $stmt = $con->prepare("INSERT INTO `compregister`(`compid`, `compname`, `location`, `email`, `description`, `username`, `password`) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $compid, $compname, $location, $email, $description, $username, $password);

            if ($stmt->execute()) {
                echo "<script> 
            alert('Company Registration successful!');
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
    <title>Company registration form</title>
    <link rel="stylesheet" href="./css/companyregi.css">
    
</head>
<body>

<div class="header">
        <div class="header-left1">
            <span ><h4>HireHUB</h4></span>
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
</header>

<!-- All the images are taken from online websites-->

    <div class="content-wrapper">
        <div class="left-side" id="left-side-container">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img class="sliderimg" src="https://img.freepik.com/premium-photo/find-job-online-business-internet-networking-concept_489646-20943.jpg?w=996" alt ="images related to online job portals">
                    <div class="text">Image One</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img class="sliderimg" src="https://img.freepik.com/premium-photo/online-recruiting-hiring-employee-concept-with-woman-suit-side-view-using-laptop-hologram-resume-cv-dark-background_670147-1413.jpg?w=900" alt ="images related to online wejob portals">
                    <div class="text">Image Two</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img class="sliderimg" src="https://img.freepik.com/free-photo/we-are-hiring-digital-collage_23-2149667062.jpg?w=900&t=st=1686476570~exp=1686477170~hmac=bd81d8d95a44353945cf33297860d74a4be2707889bbabfed781153157292a08"  alt ="images related to online job portals">
                    <div class="text">Image Three</div>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="form-container">
                <div class="logo-container">
                    <img src="https://cdn.logo.com/hotlink-ok/logo-social.png" alt="logo" height="100px" width="100px" class="logo">
                </div>
                <h6><b><u>Hire Hub</u></b></h6>
                <br>
                <h1><center>Please enter the details to register as a company</center></h1>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <br>
                    <label>Company name:</label>
                    <input type="text" name="compname" placeholder="Company Name" required><br><br>
                    <label>Registration ID:</label>
                    <input type="text" name="compid" placeholder="Registration ID" required><br><br>
                    <label>Company username:</label>
                    <input type="text" name="username" placeholder="company user name" required><br><br>
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br><br>
                    <label>Location:</label>
                    <input type="text" name="location" placeholder="Mention the country" required><br><br>
                    <label>Password:</label>
                    <input type="password" id="password" name="password" required><br><br>
                    <label>Re-type password:</label>
                    <input type="password" name="cnfrmpwd" id="cnfrmpwd" required><br /><br>
                    <p style="margin-bottom: 10px;">About the company:</p>
                    <textarea name="description" rows="2" cols="70" required></textarea><br><br>
                    <span>Please upload the company logo:</span>
                    <input type="file" name="image" accept="image/*" placeholder="Choose an image"><br><br>
                    <input id="checkBox" type="checkbox" onclick="enableButton2()" required>T&C<br /><br />
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
    <script src="./js/companyreg.js"></script>
</body>
</html>
