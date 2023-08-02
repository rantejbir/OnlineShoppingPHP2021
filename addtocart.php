<?php
include("cart.php");
@session_start();
include("connection.php");
$productid = $_GET['productid'];

$ar = array();

$qr = "select * from producttable where productid='$productid'";
$res = mysqli_query($con,$qr);
$row = mysqli_fetch_array($res);

if(!isset($_SESSION['products'])){
    $ar[0] = new cart($productid,$row['productname'],$row['price'],1,($row['price']*1),$row['photo']);
    $_SESSION['products'] = $ar;
}else{
    $ar = $_SESSION['products'];
    $newIndex = count($ar);
    $FLAG = false;
    for($i=0;$i<count($ar);$i++){
        if($ar[$i]->productid==$productid){
            $ar[$i]->qty += 1;
            $ar[$i]->total = $ar[$i]->price * $ar[$i]->qty;
            $FLAG = true;
            break;
        }
    }
    if($FLAG==false){
        $ar[$newIndex] = new cart($productid,$row['productname'],$row['price'],1,($row['price']*1),$row['photo']);
    }
    $_SESSION['products'] = $ar;
}


var_dump($ar);