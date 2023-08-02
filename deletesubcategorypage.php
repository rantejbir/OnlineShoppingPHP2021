<?php
include("connection.php");
$subcatid = $_GET['subcatid'];

$select = "select * from producttable where subcatid='$subcatid'";
$res1 = mysqli_query($con,$select);
if(mysqli_num_rows($res1)>0){
    echo "<h1 class='text-center text-danger mt-5'>Can't Delete this row. Child Table Data exists.</h1>";
    echo "<a href='viewsubcategorypage.php'>Go Back</a>";
}
else{
    $delete = "delete from subcategorytable where subcatid='$subcatid'";
    $res = mysqli_query($con,$delete);
    if($res){
        header("Location:viewsubcategorypage.php");
    }else{
        echo "<h1 class='text-center text-danger mt-5'>Something went wrong. Try again.</h1>";
        echo "<a href='viewsubcategorypage.php'>Go Back</a>";
    }
}

