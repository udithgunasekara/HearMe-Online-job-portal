<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Company Profile</title>
    <link rel="stylesheet" href="CSS/StyleSheet.css" />
    <link rel="stylesheet" href="CSS/headernfooter.css" />

</head>
<body>

    <!-- updating header-->

    <!-- red color heaer -->

    <div class="header">
        <div class="header-left">
            <span>
                <h4>HireHUB</h4>
            </span>
            <p class="buil">
                Building Bridges for <br /> Career Growth
            </p>
        </div>
       <!-- <div class="header-right">
            <button class="btn btn-primary btn-custom me-2">Login</button>
            <button class="btn btn-secondary btn-custom">Register</button>
        </div> -->
    </div>

    <!-- red color heaer -->


    <!-- nav bar -->

    <header>
        <nav>
            <ul class="navigation">
                <li>
                    <a href="company.html">Home</a> <!--link rushmika-->
                </li>
                <li>
                    <a href="vacancy_page.php">Vacancies</a>
                </li>
                <li>
                    <a href="web.php">Contact US</a> <!--link rushmika-->
                </li>
                <li>
                    <a href="aboutus.html">about Us</a>
                </li>
                <li class="search">
                    <form>
                        <input type="text" placeholder="Search..." />
                        <button type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>

    <!-- END updating header-->

    <div class="header-area">
        <div class="section1">
            <img src="Images/companylogo.jpg" alt="Company Logo"  width="150" height="150" />
            <br />
            <br />
            <div class="section1-heading"><h1>Company About</h1></div>
            <br />

            <div class="section1-description">
                <textarea class="textarea" readonly>Here the Company description !</textarea>
            </div>

            <div class="addvacanybtn">
                <a class="aaddvacanybtn" href="addvacancypage.html">Add new vacancy</a>
            </div>

        </div>
        <div class="section02-wrapper">
            <?php
                require("connection.php");
                $allusername = 'janedoe';
            ?>
            <div class="comp-title">
                <h1>Profile Details</h1>
            </div>
            <div class="comp-form">
               
                <div class="comp_input_field">
                    <label class="comp_input">Company Name: </label>
                    <?php
                    $query = "SELECT * FROM company WHERE username = '$allusername' LIMIT 1";
                    $result = $connection->query($query);
                    $row = mysqli_fetch_assoc($result);
                    $userdata = $row['companyname'];
                    ?>
                    <input type="text" class="cform" value="<?php echo $userdata; ?>" id="companyname" readonly required />   
                </div>
                <div class="comp_input_field">
                    <label class="comp_input">Company Location: </label>
                    <?php
                    $query = "SELECT * FROM company WHERE username = '$allusername' LIMIT 1";
                    $result = $connection->query($query);
                    $row = mysqli_fetch_assoc($result);
                    $userdata = $row['location'];
                    ?>
                    <input type="text" class="cform" value="<?php echo $userdata; ?>" id="companyid" readonly required />   
                </div>
                <div class="comp_input_field">
                    <label class="comp_input">Registration ID: </label>
                    <?php
                    $query = "SELECT * FROM company WHERE username = '$allusername' LIMIT 1";
                    $result = $connection->query($query);
                    $row = mysqli_fetch_assoc($result);
                    $userdata = $row['Registrationid'];
                    ?>
   
                    <input type="text" class="ccform" value="<?php echo $userdata; ?>" id="businessid" readonly required />   
                </div>
                <div class="comp_input_field">
                    <label class="comp_input">User Name: </label>
                    <?php
                    $query = "SELECT * FROM company WHERE username = '$allusername' LIMIT 1";
                    $result = $connection->query($query);
                    $row = mysqli_fetch_assoc($result);
                    $userdata = $row['username'];
                    ?>
                    <input type="text" class="cform" value="<?php echo $userdata; ?>" id="username" required readonly />   
                </div>
                <div class="comp_input_field">
                    <label class="comp_input">Password: </label>
                    <?php
                    $query = "SELECT * FROM company WHERE username = '$allusername' LIMIT 1";
                    $result = $connection->query($query);
                    $row = mysqli_fetch_assoc($result);
                    $userdata = $row['password'];
                    ?>
                    <input type="password" class="cform" value="<?php echo $userdata; ?>" id="pass" readonly required />   
                </div>
            </div>
            <div class="comp-box">
                <a class="comp-button" href="companyupdate.php#divOne">Update</a>
            </div>
        </div>
    </div>


    <div class="cvtableform">
        <div class="cvtable-heading">
            <h1>Employee Appling Count</h1>
        </div>
        <div class="cvtable">
                <table>
                     <thead>
                        <tr>
                            <td>Name</td>
                            <td>Category</td>
                            <td>CV</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("connection.php");
             
                        $sql = "SELECT * FROM employee_cv";
                        $result = $connection->query($sql);

                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                        }

                        while ($row = $result->fetch_assoc()) {

                            echo "<tr>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["category"] . "</td>
                                <td>" . $row["cv"] . "</td>
                                
                              </tr>";
                        }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
    <br />
    <br />


    <!--footer update-->
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
                <input type="text" placeholder="Search..." />
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <div class="social-media">
               
            </div>
        </div>
    </footer>
    <!-- END footer update-->


</body>
</html>