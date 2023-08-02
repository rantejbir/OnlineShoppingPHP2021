<?php

include("connection.php");
$categoryid = $_GET['categoryid'];

$select = "select * from subcategorytable where categoryid='$categoryid'";
$res1 = mysqli_query($con,$select);
if(mysqli_num_rows($res1)>0){
    echo "<h1 class='text-center text-danger mt-5'>Can't Delete this row. Child Table Data exists.</h1>";
    echo "<a href='viewcategorypage.php'>Go Back</a>";
}else{
    $delete = "delete from categorytable where categoryid='$categoryid'";
    $res = mysqli_query($con,$delete);
    if($res){
        header("Location:viewcategorypage.php");
    }else{
        echo "<h1 class='text-center text-danger mt-5'>Something went wrong. Try again.</h1>";
        echo "<a href='viewcategorypage.php'>Go Back</a>";
    }
}

