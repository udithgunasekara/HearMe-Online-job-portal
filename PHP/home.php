
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
   

    <div class="box1">
        <form action="web.php" method="post" enctype="multipart/form-data">
            <label for="user_name">Name:</label>
            <input type="text" id="user_name" placeholder="Enter your user name" name="user_name" autocomplete="off" required>

            <label for="job_category">Job Category:</label>
            <input type="text" id="job_category" placeholder="Enter your job category" name="job_category" required>

            <label for="expected_job_title">Expected Job Title:</label>
            <input type="text" id="expected_job_title" placeholder="Enter your expected job title" name="expected_job_title" required>

            <label for="expected_salary">Expected Salary:</label>
            <input type="text" id="expected_salary" placeholder="Enter your expected salary" name="expected_salary" required>

            <label for="age">Age:</label>
            <input type="number" id="age" placeholder="Enter your age" name="age" required>

            <label for="CV">CV File (PDF):</label>
            <input type="file" id="CV" name="CV" accept=".pdf" required>

            <label for="profile_picture">Profile Picture:</label>
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
