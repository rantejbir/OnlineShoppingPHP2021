<?php
include("connection.php");
$email = $_POST['email'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$mobileno = $_POST['mobileno'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$select = "select * from usertable where email='$email'";
$res1 = mysqli_query($con,$select);
if(mysqli_num_rows($res1)>0){
    header("Location:usersignup.php?err=Email already exist.Please enter another email");
}else{
    if(isset($_FILES['photo']['tmp_name'])){
        $tmpname = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        move_uploaded_file($tmpname,"images/".$filename);
    }
    $insert = "insert into usertable values ('$email','$fullname','$mobileno','$address','$city','$state','$password','$filename')";
    $res =mysqli_query($con,$insert);
    if($res){
        header("Location:userlogin.php");
    }else{
        header("Location:usersignup.php?err=SignUp Failed. Try again later.");
    }
}
