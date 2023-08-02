<?php
include ("connection.php");
//ob_start();
@session_start();

if (!isset($_SESSION['USEREMAIL'])) {
    header("Location:userlogin.php");
}else{
    $useremail = $_SESSION['USEREMAIL'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php") ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<?php include("userheader.php"); ?>
<div class="container m-5">
    <div class="col-md-12 col-12">
        <h1 class="text-center text-success">MY ORDERS</h1>

        <div class="col-12 col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Srno</th>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Pay By</th>
                    <th>Grand Total</th>
                    <th>Status</th>
                </tr>
                <?php
                $select = "select * from ordertable where useremail='$useremail' order by id DESC";
                $res = mysqli_query($con,$select);
                $num = 1;
                while($row = mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<th>".$num."</th>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['orderdate']."</td>";
                    echo "<td>".$row['paymentmethod']."</td>";
                    echo "<td>".$row['grandtotal']."</td>";
                    echo "<td>".$row['status']."</td>";
                    echo "<td><a href='orderdetail.php?orderid=".$row['id']."'>View Order Detail</a></td>";
                    echo "</tr>";
                    $num++;
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>






