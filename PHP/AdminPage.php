<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Admin Page</title>
    <link rel="stylesheet" href="CSS/StyleSheet.css" />
    
    <script src="JS/JavaScript.js"></script>
</head>
<body>
    <div class="main-content">
        <header>
            <img src="Images/websitelogo.png" alt="company logo here" width="80" height="80" />
            <!-- /* <div class="search-wrapper">
                <span>
                    <img src="Images/search-solid.svg" alt="user image here" width="24" height="24" />
                </span>
                <input type="search" placeholder="Search Here" />
            </div> */ -->

            <div class="user-wrapper">
                
                <div>
                    <h3>Udith Supeshala</h3>
                    <small>Super admin</small>
                </div> 
                <img src="Images/userlogo.jpg" alt="user image here" width="60" height="60" />
            </div>
        </header>
    </div>
    <div class="headname">
        <h1>
            Admin Dashboard
        </h1>

    </div>

    <div class="cards">
        <div class="card-single">
            <div>
                <?php
                require("connection.php");

                $tableName = "employee";
                $query = "SELECT COUNT(*) AS recordCount FROM $tableName";
                $result = $connection->query($query);

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $recordCount = $row['recordCount'];
                    echo "<h1>$recordCount</h1>";
                } else {
                    echo "<h1>0</h1>";
                }

                $connection->close();
                ?>
                <span>Employees</span>  
            </div>
            <div>
                <img src="Images/user-tie-solid.svg" alt="user image here" width="80" height="80" />
            </div>
        </div>

        <div class="card-single">
            <div>
                <?php
                require("connection.php");

                $tableName = "company_vacancy";
                $query = "SELECT COUNT(*) AS recordCount FROM $tableName";
                $result = $connection->query($query);

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $recordCount = $row['recordCount'];
                    echo "<h1>$recordCount</h1>";
                } else {
                    echo "<h1>0</h1>";
                }

                $connection->close();
                ?>
                <span>Company</span>
            </div>
            <div>
                <img src="Images/building.svg" alt="user image here"  width="80" height="80" />
            </div>
        </div>

        <div class="card-single">
            <div>
                <?php
                require("connection.php");

                $tableName = "employees";
                $query = "SELECT COUNT(*) AS recordCount FROM $tableName";
                $result = $connection->query($query);

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $recordCount = $row['recordCount'];
                    echo "<h1>$recordCount</h1>";
                } else {
                    echo "<h1>0</h1>";
                }

                $connection->close();
                ?>
                <span>CVs</span>
            </div>
            <div>
                <img src="Images/folder.svg" alt="user image here"  width="80" height="80" />
            </div>
        </div>
        
        <div class="card-single">
            <div>
                <?php
                require("connection.php");

                $tableName = "inquires";
                $query = "SELECT COUNT(*) AS recordCount FROM $tableName";
                $result = $connection->query($query);

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $recordCount = $row['recordCount'];
                    echo "<h1>$recordCount</h1>";
                } else {
                    echo "<h1>0</h1>";
                }

                $connection->close();
                ?>
                <span>Vacancies</span>
            </div>
            <div>
                <img src="Images/briefcase-solid.svg" alt="user image here"  width="80" height="80" />
            </div>

        </div>
    </div>
   <br />
    <br />
    
    <!--table emp creating-->
    <div class="recent-grid">
        <div class-="employee-table">
            <div class="table-header">
                <h1>Employee Details</h1>
            </div>
            <div class="table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>User Name</td>
                            <td>Name</td>
                            <td>E-mail</td>
                            <td>CVs</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("connection.php");

                        //read all row from database table
                        $sql = "SELECT * FROM employee";
                        $result = $connection->query($sql);

                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                        }

                        
                        while ($row = $result->fetch_assoc()) {

                            echo "<tr>
                        <td>" . $row["username"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["cvs"] . " </td>
                    </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="delete-form">
            <div class="delete-title">
                <h1>Delete User</h1>
            </div>
            <form action="deleteuser.php" method="get" id="deleteForm">
                <div class="form-group">
                    <label for="userID">UserID:</label>
                    <input type="text" name="userID" id="userID" placeholder="001" required />
                </div>
                <div class="button-container">
                    <button type="submit" onclick="deleteuser()">DELETE</button>
                </div>
            </form>
        </div>
    </div>


    <div class="inboxmails">
        <div class="inboxheading">
            <h1>Indox Mails</h1>
        </div>

        <?php
            require("connection.php");

                        
                        $sql = "SELECT * FROM inquires";
                        $result = $connection->query($sql);

                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                        }
        ?>
        <?php
                        while ($row = $result->fetch_assoc()) {


        ?>
                           <div class="mailbox">

                              <div class="mailheading">
                                <div class="subjectbox">
                                      <h3>Subject: <?php echo $row["subject"]; ?> </h3>
                                 </div>
                                 <div class="usernamebox">
                                      <h3>Name: <?php echo $row["username"]; ?> </h3>
                                 </div>
                            </div>
                          <div class="usermessage">
                           <textarea class="textarea" readonly> Description: <?php echo $row["message"]; ?>t</textarea>
                          </div>
                         </div>

        <?php
                        ;}
        ?>

        
    </div>


</body>
</html>