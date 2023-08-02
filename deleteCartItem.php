<?php
include ("cart.php");
@session_start();
$productid = $_GET['productid'];
$tempar = [];
$ar = $_SESSION['products'];
$num = 0;
for($i=0;$i<count($ar);$i++){
    if($productid!=$ar[$i]->productid){
        $tempar[$num] = $ar[$i];
        $num++;
    }
}
$_SESSION['products'] = $tempar;
echo 1;

