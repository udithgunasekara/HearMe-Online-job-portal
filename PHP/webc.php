<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" type="text/css" href="web.css">
</head>
<body>
  
    <!-- red color heaer -->

    <div class="header">
        <div class="header-left">
            <span ><h4>HireHUB</h4></span>
            <p class="buil">Building Bridges for <br> Career Growth</p>
            <br>
        </div>
        <div class="header-right">
          <button class="btn btn-primary btn-custom me-2"><a href="\mypages\log\New folder\login.php">Login</a></button>
          <button class="btn btn-secondary btn-custom"><a href="/mypages/loginselectionpage.php" >Register</a></button>
        </div>
    </div>

    <!-- red color heaer -->


<!-- nav bar -->

<header>
    <nav>
      <ul class="navigation">
        <li><a href="last_site.html">Home</a></li>
        <li><a href="vacancy_page.php">Vacancies</a></li>
        <li><a href="webc.php">Contact US</a></li>
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
    <p>CONTACT US</p>
  </div>
  <div class="container">
    <div class="section">
      <div class="call-box">
        <img src="ph.png" alt="Phone Icon">
        <div class="call-details">
          <h2>Call Us Directly</h2>
          <p>Phone: +1234567890</p>
          <p>Business Hours: 9am - 5pm</p>
        </div>
      </div>
      <div class="call-box">
        <img src="emaill.jpg" alt="email Icon">
        <div class="call-details">
          <h2>Email Us</h2>
          <p>chamathiduwara@gmail.com</p>
          <p>chamathidter@gmail.com</p>
        </div>
      </div>
      <div class="map-image">
        <p><b><center>We're here to help.<br>
           If not, please get in touch with us and we will<br>
            get back to you as soon as possible</center></b></p>
            
        <a href="https://www.google.com/maps/place/Sri+Lanka+Institute+of+Information+Technology/@6.9275358,79.8575054,13z/data=!4m17!1m10!4m9!1m1!4e2!1m6!1m2!1s0x3ae256db1a6771c5:0x2c63e344ab9a7536!2ssliit!2m2!1d79.9729445!2d6.9146775!3m5!1s0x3ae256db1a6771c5:0x2c63e344ab9a7536!8m2!3d6.9146775!4d79.9729445!16zL20vMDRtMmcz?entry=ttu">
          <img src="map.png" alt="Map">
        </a>
      </div>
    </div>
    
    <div class="section">
      <div class="contact-form">
        <h2 class="page-title">Contact Us</h2>
        <form action="contact.php" method="post">
          <div class="name-inputs">
            <label for="username" class="form-label">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <label for="name" class="form-label" >Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" required>
          </div>
          <label for="email" class="form-label">Email:</label>
          <input type="email" id="email" name="email" placeholder="Email" required>
          <label for="subject" class="form-label">Subject:</label>
          <input type="text" id="subject" name="subject"placeholder="Subject" required>
          <label for="message" class="form-label">Message:</label><br><br>
          <textarea id="message" name="message" placeholder="Message" required></textarea>
          <center><button type="submit" value="Submit" class="submit-btn">Submit</button></center>
        </form>
      </div>
      <div class="location-info">
        <br><br><br>
        <h2>Our Location</h2>
        <p><b>Address:-SLIIT Malabe Campus, New Kandy Rd,<br> Malabe 10115</b></p>
      </div>
    </div>
  </div>
  <div class="bottom-bar">
    Thank You
  </div>
  <link rel="stylesheet" href="headerfooter.css">
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
  <script src="script.js"></script>
</body>
</html>
