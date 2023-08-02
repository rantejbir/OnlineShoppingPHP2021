<?php
include("connection.php");
$orderid = $_POST['orderid'];
$trackingno = $_POST['trackingno'];
$companyname = $_POST['companyname'];
$remarks = $_POST['remarks'];
$date = date('Y-m-d');
$status = "Shipped";
$qr = "insert into shippingtable value (null,'$trackingno','$companyname','$date','$remarks',null,null,'$status','$orderid')";
$res = mysqli_query($con,$qr);
if($res){
    $upt = "update ordertable set status='$status' where id='$orderid'";
    $res1 = mysqli_query($con,$upt);
    if($res1){
        header("Location:allorders.php");
    }
}
