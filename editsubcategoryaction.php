<?php
include ("connection.php");

$subcatid = $_POST['subcatid'];
$categoryid = $_POST['categoryid'];
$subcategoryname = $_POST['subcategoryname'];
$subcategorydescription = $_POST['subcategorydescription'];

$qr = "select * from subcategorytable where subcatname='$subcategoryname' and categoryid=$categoryid and subcatid<>'$subcatid'";
$rs = mysqli_query($con,$qr);
if(mysqli_num_rows($rs)>0){
    header("Location:editsubcategorypage.php?err=0&subcatid=$subcatid");
}else{
    $insert  = "update subcategorytable set subcatname='$subcategoryname',descp='$subcategorydescription',categoryid='$categoryid' where subcatid='$subcatid'";
    $res =mysqli_query($con,$insert);
    if($res){
        header("Location:editsubcategorypage.php?err=1&subcatid=$subcatid");
    }else{
        header("Location:editsubcategorypage.php?err=2&subcatid=$subcatid");
    }
}


