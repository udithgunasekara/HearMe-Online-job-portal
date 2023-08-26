<?php
include_once './config.php';

session_start();


if (isset($_SESSION['empid'])) {
  $empid = $_SESSION['empid'];
  

  $selectSql = "SELECT * FROM empregiter WHERE empid = ?";
  $stmt = $con->prepare($selectSql);
  $stmt->bind_param("i", $empid);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  

  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $username = $row['username'];
  $password = $row['password'];
  $dob = $row['dob'];
  $phonenumber = $row['phonenumber'];
  $email = $row['email'];

  
  echo '
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <title>Employee Profile Update</title>
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
    
            <a onclick="logout()" class="btn btn-primary btn-custom me">Log Out</a>
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
                        <center>Update Employee Details</center>
                    </h1>
                    <br>
                    <br>
                    <br>
                    <form action="update_process.php" method="POST">
                        <br>
                        <label>First name:</label>
                        <input type="text" name="firstname" placeholder="First Name"  value="'.$firstname.'" required><br /><br>
    
                        <label>Last name:</label>
                        <input type="text" name="lastname" placeholder="Last Name"  value="'.$lastname.'" required><br /><br>
    
                        <label>Username:</label>
                        <input type="text" name="username" placeholder="UserName"  value="'.$username.'" required><br /><br>
    
                        <label>Email:</label>
                        <input type="email" name="email" placeholder="abc@gmail.com"  value="'.$email.'" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br /><br />
    
                        <label>Password:</label>
                        <input type="password" id="password" name="password"  value="'.$password.'" required><br /><br />
    
                        <label>Re-type password:</label>
                        <input type="password" id="cnfrmpwd" name="cnfrmpwd"  value="'.$password.'" required><br /><br>

                        <label>DOB:</label>
                        <input type="date" name="day" id="day"  value="'.$dob.'" required><br /><br />
    
                        <label>Mobile number :</label>
                        <input type="text" name="mobilenumber"  value="'.$phonenumber.'" id="mobilenumber" placeholder="Mobile number" maxlength="10" required><br /><br>
    
                        <br />
                  
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













  ';
} else {
  echo "Employee ID not found.";
}
?>
