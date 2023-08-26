<?php

$con = new mysqli("localhost:3306","root","","onlinejob");

if($con){
    //echo "connection succsesfull";

}else{
    die(mysqli_error($con));
}

?>