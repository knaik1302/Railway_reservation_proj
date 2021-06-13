<?php

session_start();
$con = mysqli_connect('localhost','RRSP','','rrsp_registration',3307);

if(!$con){
    echo 'Connection error: ' .mysqli_connect_error();
}

$name = $_POST['username'];
$email= $_POST['email'];
$pass = $_POST['password1'];

$s = "select * from user where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1){
    echo "Username already Taken...!!!";
    echo '<a href="http://localhost/rrsp/signup.php">Back</a>';
}else{
    $reg = "insert into user (username, email, password) values ('$name','$email','$pass')";
    mysqli_query($con, $reg);
    echo "$name.. You Registered Successfully..!!";
    echo '<a href="http://localhost/rrsp/HOME/hp.php">Go to Home</a>';
}
?>