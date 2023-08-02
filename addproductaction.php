<?php
include("connection.php");

$categoryid = $_POST['categoryid'];
$subcatid = $_POST['subcatid'];
$productname = $_POST['productname'];
$mrp = $_POST['mrp'];
$discount = $_POST['discount'];
$price = $_POST['price'];
$productdescription = $_POST['productdescription'];

$select = "select * from producttable where productname='$productname' and subcatid='$subcatid'";
$rs = mysqli_query($con,$select);
if(mysqli_num_rows($rs)>0){
    header("Location:addproductpage.php?err=0");
}else {

    if(!empty($_FILES['photo']['name'])){
        $tempname = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        move_uploaded_file($tempname, "productimages/$filename");
    }

    $qr = "insert into producttable values (null,'$productname','$filename','$mrp','$discount','$price','$subcatid','$productdescription')";
    $res = mysqli_query($con, $qr);
    if ($res) {
        header("Location:addproductpage.php?err=1");
    } else {
        header("Location:addproductpage.php?err=2");
    }
}