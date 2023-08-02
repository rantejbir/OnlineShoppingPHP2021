<?php
include("connection.php");
$email = $_POST['email'];
$password = $_POST['password'];
$qr = "update usertable set password='$password' where email='$email'";
$res = mysqli_query($con,$qr);
if($res){
    header("Location:userlogin.php");
}else{
    header("Location:resetpassword.php?err=Password not Updated. Try again");
}