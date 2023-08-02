<?php
@session_start();
if(isset($_SESSION['USEREMAIL'])){
    header("Location:billingaddress.php");
}else{
    header("Location:userlogin.php");
}
