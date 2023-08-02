<?php
include ("connection.php");

$categoryname = $_POST['categoryname'];
$categorydescription = $_POST['categorydescription'];

$qr = "select * from categorytable where categoryname='$categoryname'";
$rs = mysqli_query($con,$qr);
if(mysqli_num_rows($rs)>0){
    header("Location:addcategorypage.php?err=0");
}else{
    $insert  = "insert into categorytable values (null,'$categoryname','$categorydescription')";
    $res =mysqli_query($con,$insert);
    if($res){
        header("Location:addcategorypage.php?err=1");
    }else{
        header("Location:addcategorypage.php?err=2");
    }
}


