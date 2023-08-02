<?php
session_start();
include ("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];

$qr = "select * from usertable where email='$email' and password='$password'";
$result = mysqli_query($con,$qr);

if(mysqli_num_rows($result)>0){
    $_SESSION['USEREMAIL'] = $email;
    header("Location:userhomepage.php");
}else{
    header("Location:userlogin.php?err=Invalid Login");
}
?>
