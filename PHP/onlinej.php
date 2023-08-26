<?php
include "onlinejob.php";

$con = new mysqli("localhost","root","","vacancies");

if($con){
    echo "connection sucsesfull";

}else{
    die(mysqli_error($con));
}


?>