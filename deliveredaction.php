<?php
include("connection.php");
$orderid = $_POST['orderid'];
$receivedperson = $_POST['receivedperson'];
$remarks = $_POST['remarks'];
$date = date('Y-m-d');
$status = "Delivered";
$qr = "update shippingtable set personrecieved='$receivedperson',deliveryremarks='$remarks',status='$status' where orderid='$orderid'";
echo $qr;
$res = mysqli_query($con,$qr);
if($res){
    $upt = "update ordertable set status='$status' where id='$orderid'";
    $res1 = mysqli_query($con,$upt);
    if($res1){
        header("Location:shippedorders.php");
    }
}
