<?php
include_once './config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $logintype = $_POST['logintype'];

    if (strlen($pass) < 8) {
        echo "<script> 
        alert('Password should be atleast 8 characters long');
    </script>";
   }
   else{
     if ($logintype == "Employee"){
        $sql = "SELECT * FROM empregiter WHERE username='" . $username . "' AND password='" . $pass . "'";
        $result = $con->query($sql);
    
        if ($result && $result->num_rows == 1) {
    
            $row = $result->fetch_assoc();
                $empid = $row['empid'];
    
                $_SESSION['empid'] = $empid;
    
            echo "<script> 
                alert('Employee Login Successful');
                window.location.href='homepage.php';
            </script>";
        } else {
            echo "<script> 
                alert('Login Unsuccessful');
            </script>";
        }
     }
    else if ($logintype == "Company"){
        $sql = "SELECT * FROM compregister WHERE username='" . $username . "' AND password='" . $pass . "'";
        $result = $con->query($sql);
    
        if ($result && $result->num_rows == 1) {
    
            $row = $result->fetch_assoc();
                $empid = $row['compid'];
    
                $_SESSION['empid'] = $empid;
    
            echo "<script> 
                alert('Company Login Successful !');
                window.location.href='companyhome.php';
            </script>";
        } else {
            echo "<script> 
                alert('Login Unsuccessful');
            </script>";
        }
     }
   }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log in</title>
    <link rel="stylesheet" href="./css/login.css">

</head>

<body>
    <div class="left-side" id="left-side-container">
      
    </div>

    <div class="right-side">
        <div class="form-container">
            <h1><u>Hire Hub</u></h1>
            <form onsubmit="return checkPassword();" action="" method="post">

                <div class="headingsContainer">

                    <h3>Welcome back!</h3>
                    <br>
                    <p>Please login to continue!</p>
                    <br>
                </div>

        
                <div class="mainContainer">

                    <label for="username">Please enter your username here.</label><br><br>
                    <input type="text" placeholder="Enter Username" id="username" name="username" required>
                    <br><br>
                    <label>Please enter your password here</label><br><br>
                    <input type="password" placeholder="Enter Password" name="password" id="password"
                        required>
                        <br>
                        <br>
                        <label>Login as Company or Employee</label><br><br>

                        <div class="loginswitch ">
                        <label class="container">Employee
  <input type="radio" checked="checked" name="logintype" value='Employee'>
  <span class="checkmark"></span>
</label>
<label class="container">Company
  <input type="radio" name="logintype" value='Company'>
  <span class="checkmark"></span>
</label>
</div>
<br>
                    
                    <div class="subcontainer">
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                         <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                        </div>
                           <input id="checkBox" type="checkbox" onclick="enableButton2()">Accept privacy required <br>
                              <br /><br />
                    
                    <p class="register">Isn't a member? <a href="loginselectionpage.php"> Please register here!</a></p>  
                </div>

                <center><input type="submit" id="submitBtn" value="Submit"></center>  
            </form>
        </div>
    </div>




    <script>
        // function checkPassword() {
        //     var password = document.getElementById("password").value;
            
        //     if (password.toString().length != 8) {
        //         alert("Password must be 8 characters long.");
        //         return false;
        //     }
        //     var passwordStrength = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        //     if (!password.match(passwordStrength)) {
        //         alert("Password must contain at least one lowercase letter, one uppercase letter, and one digit.");
        //         return false;
        //     }
        //     return redirectToURL();
        // }

        // function redirectToURL() {
        //     window.location.href = "https://www.google.com";
        // }

        // function enableButton2() {
        //     var checkBox = document.getElementById("checkBox");
        //     var submitBtn = document.getElementById("submitBtn");
        //     submitBtn.disabled = !checkBox.checked;
        // }

        // var termsLink = document.getElementById("termCLink");
        // termsLink.addEventListener("click", function () {
        //     termsLink.clicked = true;
        // });
    </script>
</body>
</html>