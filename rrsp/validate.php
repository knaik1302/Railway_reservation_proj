<?php
session_start();
$con = mysqli_connect('localhost','RRSP','','rrsp_registration',3307);

if(!$con){
    echo 'Connection error: ' .mysqli_connect_error();
}

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from user where username = '$name' and password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 0){
    echo "You haven't Registered Yet...!!!";
    echo '<a href="http://localhost/rrsp/signup.php">signup</a>';
}else{
    echo "$name..Welcome Back..!!";
    echo '<a href="http://localhost/rrsp/HOME/hp.php">Go to Home</a>';
}
?>