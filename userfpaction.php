<?php
include("connection.php");
$email = $_POST['email'];
$select = "select * from usertable where email='$email'";
$res = mysqli_query($con,$select);
if(mysqli_num_rows($res)>0){
    header("Location:resetpassword.php?email=$email");
}else{
    header("Location:forgotpassword.php?err=Incorrect Email ID");
}
