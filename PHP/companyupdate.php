<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Company Profile</title>
    <link rel="stylesheet" href="CSS/companyupdate.css">
    <script src="JS/JavaScript.js"></script>
    
</head>
<body>
	<div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>Update your profile</h2>
			<div class="content">
                <div class="container">
                    <?php
                    require("connection.php");
                    $allusername = 'janedoe';

                    if (isset($_POST['submit'])) {

                        $companyname = $_POST["name"];
                        $compreqid = $_POST["Registrationid"];
                        $location = $_POST["location"];
                        $password = $_POST["password"];
                        

                        $sql = "UPDATE company SET companyname ='$companyname',location = '$location', password = '$password', Registrationid = '$compreqid' WHERE username = '$allusername' ";
                        $result = mysqli_query($connection, $sql);

                        if ($result) {
                            echo "Record updated successfully";
                        } else {
                            echo "Error updating record: " . mysqli_error($connection);
                        }
                    }
                    ?>

                    <form method="POST" id="gocompanypage" action="#">
                        <label for="name">Company Name: </label>
                        <input name="name" id="name" placeholder="Enter new company name" type="text" required />
                        <label for="Registrationid">Registration ID: </label>
                        <input name="Registrationid" id="Registrationid" placeholder="Enter company registration ID" type="text" required />
                        <label for="location">Company Location</label>
                        <input id="location" name="location" placeholder="Enter new location" type="text" required />
                        <label for="password">Password</label>
                        <input id="password" name="password" placeholder="Enter new password" type="password" required />
                        <label for="des">Description</label>
                        <textarea id="des" name="description" placeholder="Enter new description" required></textarea>

                        <div class="submitbtn">
                            <input onclick="redirecttocompanypage()" name="submit" id="submit" type="submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
		</div>
	</div>
</body>
</html>
