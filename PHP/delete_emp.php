
<?php
session_start();
include 'connect.php';

if(isset($_post['std_delete']))
{
    $id=$_post['username'];
    $query="delete from employee where id ='$id'";
    $query_run=mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status']= "data deleted successfully";
        header("location: profile.php");
    }
    else{
        $_SESSION ['status']="data not deleted";
        header("location: profile.php");
    }
}


