<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
<!-- red color heaer -->

<div class="header">
        <div class="header-left">
            <span ><h4>HireHUB</h4></span>
            <p class="buil">Building Bridges for <br> Career Growth</p>
            <br>
        </div>
        <!--<div class="header-right">
          <button class="btn btn-primary btn-custom me-2">Login</button>
          <button class="btn btn-secondary btn-custom">Register</button>
        </div>-->
    </div>

    <!-- red color heaer -->


<!-- nav bar -->

<header>
    <nav>
      <ul class="navigation">
        <li><a href="last_site.html">Home</a></li>
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
  <div class="top-bar">
    <h1>My Profile</h1>
  </div>
  <div class="container">
    <div class="profile-picture">
      <div class="image">
        <img src="pro2.png" alt="Profile Picture" width="130px">
      </div>
      <div class="name">
        <input type="text" id="fullName" name="fullName" readonly>
      </div>
  <form action="delete_emp.php" method="post">
  <!-- <form action="employee.php" method="post">
    <form action="employee.php" method="post">-->
        <div class="textarea-group">
          <label for="description">Description</label><br>
          <textarea id="description" name="description" rows="9" cols="50"></textarea>
        </div>
        <div class="textarea-group">
          <label for="experience">Experience</label><br>
          <textarea id="experience" name="experience" rows="9" cols="50"></textarea>
        </div>
    </div>
    <div class="profile-details">
      <h2><u>Details</u></h2>
     
      <div class="input-group inline">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" >
        <label for="lastName"> Last Name:</label>
        <input type="text" id="lastName" name="lastName" >
      </div>
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="input-group">
        <label for="dob">DOB:</label>
        <input type="date" id="dob" name="dob">
      </div>
      <div class="input-group">
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" >
      </div>
      <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" >
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
      </div>
      <hr>
      <div class="button-group">
        <button type="submit" id="editButton" name="updatebtn" class="btn-control">Update</button>
        <button type="submit" id="deleteButton" name="std_delete">Delete</button>
      </div>
    </form>

    </div>
  </div>
  <link rel="stylesheet" href="headerfooter.css">
  <script src="profile.js"></script>
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
        
      </div>
    </div>
  </footer>
</body>
</html>
