<?php
session_start();
include ("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];

$qr = "select * from admintable where email='$email' and password='$password'";
$result = mysqli_query($con,$qr);

if(mysqli_num_rows($result)>0){
    $_SESSION['ADMINEMAIL'] = $email;
    header("Location:adminhomepage.php");
}else{
    header("Location:adminlogin.php?err=Invalid Login");
}
