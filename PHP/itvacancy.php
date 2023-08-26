
<!DOCTYPE html>
<html>
<head>
  <title>Computer and information technology vacancies</title>
  <link rel="stylesheet" href="it.css">
</head>
<body>

  

<div class="header">
        <div class="header-left">
            <span ><h4>HireHUB</h4></span>
            <p class="buil">Building Bridges for Career Growth</p>
            <br>
        </div>
        <div class="header-right">
          <button class="btn btn-primary btn-custom me-2"><a href="login.php">Login</button>
          <button class="btn btn-secondary btn-custom"><a href="loginselection.php">Register</button>
        </div>
    </div>

    




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

  <fieldset>
    <legend id="Title">Trending Software Engineering Jobs</legend>
    <br>
    <section id="card-section">
      <div class="all_cards">

          <?php



          require "connection.php";
          $sql="SELECT * FROM vacancy_details WHERE category='Computer and information technology'";
          $result=$connection->query($sql);
          $j=1;
          if ($result->num_rows>=0) {
            while ($row=$result->fetch_assoc()) {
              $paragraph = $row["description"];

              $words = explode(" ", $paragraph); 
              $wordCount = count($words);

              $newParagraph = "";
              for ($i = 0; $i < $wordCount; $i++) {

                $newParagraph .= $words[$i] . " "; 
               
               if (($i + 1) % 4 === 0) {

                $newParagraph .= "<br>";
                }
              }
              echo
               "<div class='card-container'><div class='card'><div class='card-img-circle'>
                  <img src='images/default_com.png' alt='Card image'>
                </div>
                <div class='card-body'>
                  <h5 class='card-title'>".$row["job_title"]."</h5>
                  <p class='card-text'>".$newParagraph."</p>
                  <a href='' class='bt'>Apply now</a>
                </div>
              </div></div>";
              if ($j % 4 === 0) {
                echo "<br>";
              }
              $j++;

              
            }
          }

          
            ?>


         




        
      </div>
    </section>
  </fieldset>

  <fieldset>
    <legend id="Title">Software Engineering Jobs</legend>
    <br>
    <section id="card-section">
      <div class="all_cards">

      <?php



      require "connection.php";
$sql1="SELECT * FROM vacancy_details WHERE job_title='Software engineer'";
$result1= $connection->query($sql1);
$j=1;
if ($result1->num_rows>0) {
  while ($row1=$result1->fetch_assoc()) {
    $paragraph1 = $row1["description"];

    $words1 = explode(" ", $paragraph1);
    $wordCount1 = count($words1);

    $newParagraph1 = "";
    for ($i = 0; $i < $wordCount1; $i++) {

      $newParagraph1 .= $words1[$i] . " "; 
     
     if (($i + 1) % 4 === 0) {

      $newParagraph1 .= "<br>";
      }
    }
    echo
     "<div class='card-container'><div class='card'><div class='card-img-circle'>
        <img src='images/default_com.png' alt='Card image'>
      </div>
      <div class='card-body'>
        <h5 class='card-title'>".$row1["job_title"]."</h5>
        <p class='card-text'>".$newParagraph1."</p>
        <a href='' class='bt'>Apply now</a>
      </div>
    </div></div>";
    if ($j % 4 === 0) {
      echo "<br>";
    }
    $j++; 

  }
}

  ?>

            
         




        
      </div>
    </section>
  </fieldset>

</body>

<fieldset>
    <legend id="Title">Other IT related Jobs</legend>
    <br>
    <section id="card-section">
      <div class="all_cards">
      <?php

$conn=new mysqli("127.0.0.1:3307","root","","vacancies");
$sql1="SELECT * FROM vacancy_details WHERE job_title!='Software engineer' AND category='Computer and information technology'";
$result1=$conn->query($sql1);
$j=1;
if ($result1->num_rows>0) {
  while ($row1=$result1->fetch_assoc()) {
    $paragraph1 = $row1["description"];

    $words1 = explode(" ", $paragraph1); 
    $wordCount1 = count($words1);

    $newParagraph1 = "";
    for ($i = 0; $i < $wordCount1; $i++) {

      $newParagraph1 .= $words1[$i] . " "; 
     
     if (($i + 1) % 4 === 0) {

      $newParagraph1 .= "<br>";
      }
    }
    echo
     "<div class='card-container'><div class='card'><div class='card-img-circle'>
        <img src='images/default_com.png' alt='Card image'>
      </div>
      <div class='card-body'>
        <h5 class='card-title'>".$row1["job_title"]."</h5>
        <p class='card-text'>".$newParagraph1."</p>
        <a href='' class='bt'>Apply now</a>
      </div>
    </div></div>";
    if ($j % 4 === 0) {
      echo "<br>";
    }
    $j++;
  }
}

  ?>
           
          




     
      </div>
    </section>
  </fieldset>


    
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

