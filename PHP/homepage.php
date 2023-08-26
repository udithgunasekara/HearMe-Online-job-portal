
<?php
include_once './config.php';

session_start();

$userId = $_SESSION['empid']; 

$sql = "SELECT firstname,lastname,dob,phonenumber,email, username, password FROM empregiter WHERE empid = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($firstname, $lastname, $dob,$phonenumber,$email, $username, $password);
$stmt->fetch();
$stmt->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Profile</title>
    <link rel="stylesheet" href="./css/empreg.css">
    <link rel="stylesheet" href="./css/homepage.css">
</head>

<body>
<div class="header">
        <div class="header-left1">
        <div class="logo-container">
                    <img src="https://cdn.logo.com/hotlink-ok/logo-social.png" alt="logo" height="100px" width="100px" class="logo">
                </div>
            <span ><h4>HireHUB</h4></span>
            <p class="buil">Building Bridges for <br> Career Growth</p>
        </div>
        <div class="header-right1">

        <a onclick="window.location.href = 'homepage.php'" class="btn btn-primary btn-custom me">Profile</a>
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


    <center class="homepagecss">
   
        <br> <br> 

<h2 style="text-align:center">User Profile</h2><br> <br>

<div class="card">
  <img src="https://static.thenounproject.com/png/236431-200.png" alt="John" style="height:200px">
  <br><br>
  <h1 class="nameff"><?= $firstname . ' ' . $lastname ?></h1>  <br>
  <p class="title">Email : <?php echo $email; ?></p>  <br>
  <p>Birthday : <?php echo $dob; ?></p>  <br>
  <p>Mobile : <?php echo $phonenumber; ?></p>

  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick="window.location.href = 'update.php'" class="button1">Edit</button><button class="button2" onclick="confirmDelete()">Deactivate</button></p>
</div>
<br> <br>
</center>


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
     
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
      
    </div>
    <div class="footer-content">
      <h3>Follow Us</h3>
      <div class="social-media">
     
      </div>
    </div>
</footer>
 
    <script src="./js/delete.js"></script>
</body>

</html>
