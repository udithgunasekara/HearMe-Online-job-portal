<?php
$description=array();
$job=array();
$category=array();
$company_name=array();

require "connection.php";

$Query = "SELECT * FROM vacancy_details";
$result = $connection->query($Query);
if ($result->num_rows>0) {

    $i=0;
    while($row=$result->fetch_assoc()){
        $job[$i]= $row["job_title"];

        $description[$i]= $row["description"];
        $category[$i] = $row["category"];
        $company_name[$i]=$row["company_name"];
        $i++;
    }
} else {
    # code...
}

 ?>

<!DOCTYPE html>
<head>
    <title>Vacancy Page</title>
    <link rel="stylesheet" href="page.css">
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

    





    <div id="main">
        <div id="up">
            <div id="title">
                <fieldset>
                    <legend id="Title">vision</legend>
                    <br>
                    <br>
                    <div class="pp">
                    <p>We are here to assist you in finding work<br> and a promising future.</p>
                    </div>
                    </legend>
                </fieldset>
               
            </div>
            
            <div id="bigp">
                <br>
                <br>
                <img src="images/bigp1.jpg" alt="big picture">
            </div>    
        </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        <div id="umid">
            <div id="topic">
                <h2>Trending Jobs</h2>
            </div>
            <div id="Search">
                <input type="search" id="Search" value="search">
            </div>
        </div>
        <br>
            <br>
            <br>
        <section>
        <div id="jcard">
            <!-------- cards --------->
            
            <?php
            require "connection.php";

            $max_id=$connection->query("SELECT MAX(id) FROM vacancy_details")->fetch_row()[0];
            ?>
<section id="card-section">
    <div class="all_cards">
    <div class="card-container">
        <div class="card">
          <img src="images/default_com.png" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $job[$max_id-2];?></h5>
            <p class="card-text"><?php echo $description[$max_id-2];?></p>
            <a href="#" class="bt">Apply now</a>
          </div>
        </div>

        <div class="card">
          <img src="images/default_com.png" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $job[$max_id-2];?></h5>
            <p class="card-text"><?php echo $description[$max_id-2];?></p>
            <a href="#" class="bt">Apply now</a>
          </div>
        </div>
    
        <div class="card">
          <img src="images/default_com.png" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $job[$max_id-3];?></h5>
            <p class="card-text"><?php echo $description[$max_id-3];?></p>
            <a href="#" class="bt">Apply now</a>
          </div>
        </div>
    
        <div class="card">
          <img src="images/default_com.png" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $job[$max_id-4];?></h5>
            <p class="card-text"><?php echo $description[$max_id-4];?></p>
            <a href="#" class="bt">Apply now</a>
           </div>
        </div>

        
    </section>
    
    <section>

   
<section id="card-section">
    <div class="all_cards">
    <div class="card-container">
        <div class="card">
          <img src="images/default_com.png" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $job[$max_id-5];?></h5>
            <p class="card-text"><?php echo $description[$max_id-5];?></p>
            <a href="#" class="bt">Apply now</a>
          </div>
        </div>
    
        <div class="card">
          <img src="images/default_com.png" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $job[$max_id-6];?></h5>
            <p class="card-text"><?php echo $description[$max_id-6];?></p>
            <a href="#" class="bt">Apply now</a>
          </div>
        </div>
    
        <div class="card">
          <img src="images/default_com.png" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $job[$max_id-7];?></h5>
            <p class="card-text"><?php echo $description[$max_id-7];?></p>
            <a href="#" class="bt">Apply now</a>
          </div>
        </div>
    
        <div class="card">
          <img src="images/default_com.png" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $job[$max_id-8];?></h5>
            <p class="card-text"><?php echo $description[$max_id-8];?></p>
            <a href="#" class="bt">Apply now</a>
           </div>
        </div>
    </section>
    
    </section>

    

    <br>
    <br>



        </section>
        </div>
        <div id="dmid">

        </div>
        <div id="down">
            
            <div id="Cname">
                <fieldset>
                    <legend id="category">Categories</legend>
                
                <a href="Businessandadministration" style="text-decoration: none; color: #000; font-weight: bold;"><h4 style="font-weight: bold; text-decoration: none; color: #000;">Business and administration</h4></a> 
                <br>  
                <a href="itvacancy.php" style="text-decoration: none; color: #000; font-weight: bold;"><h4 style="font-weight: bold; text-decoration: none; color: #000;">Computer and information technology</h4></a>
                <br>
                <a href="Education and training" style="text-decoration: none; color: #000; font-weight: bold;"><h4 style="font-weight: bold; text-decoration: none; color: #000;">Education and training</h4></a>
                <br>
                <br>
                <br>
                <br>
                </legend>
                </fieldset>
            </div>
            <div id="Cimg">
                <img src="images/job-search.png" alt="Category img">
            </div>
        </div>
    </div>

    
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
