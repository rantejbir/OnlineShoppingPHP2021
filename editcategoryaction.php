<?php
include ("connection.php");

$categoryid = $_POST['categoryid'];
$categoryname = $_POST['categoryname'];
$categorydescription = $_POST['categorydescription'];

$qr = "select * from categorytable where categoryname='$categoryname' and categoryid<>$categoryid";
$rs = mysqli_query($con,$qr);
if(mysqli_num_rows($rs)>0){
    header("Location:editcategorypage.php?err=0&categoryid=$categoryid");
}else{
    $insert  = "update categorytable set categoryname='$categoryname',descp='$categorydescription' where categoryid='$categoryid'";
    $res =mysqli_query($con,$insert);
    if($res){
        header("Location:editcategorypage.php?err=1&categoryid=$categoryid");
    }else{
        header("Location:editcategorypage.php?err=2&categoryid=$categoryid");
    }
}


