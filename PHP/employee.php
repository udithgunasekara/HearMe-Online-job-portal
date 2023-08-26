
<?php
                    require("connect.php");

                    if (isset($_POST['updatebtn'])) {

                        $firstname1=$_POST['firstName'];
                        $lastname1=$_POST['lastName'];
                        $email1=$_POST['email'];
                        $dob1=$_POST['dob'];
                        $contact1=$_POST['contact'];
                        $username1=$_POST['username'];
                        $password1=$_POST['password'];
                        $descrption1=$_post['description'];
                        $experience1=$_post['experience'];

                        $sql = "UPDATE employee SET firstname='$firstname1', lastname='$lastname1', email='$email1',dob='$dob1',contact='$contact1',password='$password1',description='$descrption1',experience='$experience1' where username='$username1'";
                        $result = mysqli_query($connect, $sql);


                        if ($result) {
                            echo "Record updated successfully";
                        } else {
                            echo "Error updating record: " . mysqli_error($connection);
                        }
                    }
                    ?>
    