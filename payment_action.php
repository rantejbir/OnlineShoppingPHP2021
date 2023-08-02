<?php
include "cart.php";
@session_start();
include("connection.php");
$refid = $_POST['refid'];
if($refid == ""){
    echo 1;
}else{
    $orderdate = date('Y-m-d');
    $fullname= $_POST['fullname'];
    $mobileno = $_POST['mobileno'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $paymentmethod = $_POST['paymentmethod'];
    $grandtotal = $_POST['grandtotal'];
    $useremail = $_SESSION['USEREMAIL'];
    $qr1 = "insert into ordertable values (null,'$fullname','$mobileno','$address','$city','$state','$paymentmethod','$grandtotal','$orderdate','Pending','$useremail')";
    $res1 = mysqli_query($con,$qr1);
    if($res1){
        $ar = $_SESSION['products'];

//        $qr11 = "select max(id) from ordertable; select id from ordertable order by id DESC";
//        $res11 = mysqli_query($con,$qr11);
//        $row11 = mysqli_fetch_array($res11);
//        $orderid = $row11[0];

        $orderid = mysqli_insert_id($con);
        for($i=0;$i<count($ar);$i++){
            $productid = $ar[$i]->productid;
            $price = $ar[$i]->price;
            $qty = $ar[$i]->qty;
            $total = $ar[$i]->total;
            $qr2 = "insert into orderdetail values (null,'$orderid','$productid','$price','$qty','$total')";
            $res2 = mysqli_query($con,$qr2);
            if($res2){

                $data = "Your Order ID-".$orderid." has been placed successfully on ".date('d-m-Y',strtotime($orderdate)).".for amount of Rs."
                        .$grandtotal;
                $ch = curl_init();
                $message=urlencode($data);
                curl_setopt($ch, CURLOPT_URL,"http://13.126.129.80/VMMCloudMessaging/AWS_SMS_Sender?");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "username=onlshopnodefeb2022&password=RD19XCGX&message=".$message."&phone_numbers=".$mobileno);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        print_r($ch);
                $server_output = curl_exec ($ch);
                curl_close ($ch);
//        print_r($server_output);
            unset($_SESSION['products']);
                echo 2;
            }
        }
    }
}