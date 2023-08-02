<?php
include("connection.php");

$categoryid = $_POST['categoryid'];
$subcategoryname = $_POST['subcategoryname'];
$subcategorydescription = $_POST['subcategorydescription'];

$select = "select * from subcategorytable where subcategoryname='$subcategoryname' and categoryid='$categoryid'";
$rs = mysqli_query($con,$select);
if(mysqli_num_rows($rs)>0){
    header("Location:addsubcategorypage.php?err=0");
}else {
    $qr = "insert into subcategorytable values (null,'$subcategoryname','$subcategorydescription','$categoryid')";
    $res = mysqli_query($con, $qr);
    if ($res) {
        header("Location:addsubcategorypage.php?err=1");
    } else {
        header("Location:addsubcategorypage.php?err=2");
    }
}