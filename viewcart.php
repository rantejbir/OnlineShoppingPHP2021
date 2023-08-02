<?php
include("cart.php");
@session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php"); ?>

</head>
<body>
<?php
if(isset($_SESSION['USEREMAIL'])){
    include("userheader.php");
}else{
    include("header.php");
}
?>
<div class="container">
    <div class="col-md-12 col-12">
        <h1 class="text-center">View Your Cart</h1>

        <table class="table table-bordered">
            <tr>
                <th>Srno</th>
                <th>Product Name</th>
                <th>Photo</th>
                <th>Price(Rs)</th>
                <th>Qty</th>
                <th>Total(Rs)</th>
                <th>Action</th>
            </tr>
            <?php
            if(isset($_SESSION['products'])){
                $ar = (array)($_SESSION['products']);
                $grd_ttl =0;
                for($i=0;$i<count($_SESSION['products']);$i++){
                    $grd_ttl = $grd_ttl + ($ar[$i]->price * $ar[$i]->qty);
                    ?>
                     <tr>
                         <td><?php echo ($i+1); ?></td>
                         <td><?php echo $ar[$i]->productname; ?></td>
                         <td><img width="100" height="80" src="productimages/<?php echo $ar[$i]->photo; ?>" /></td>
                         <td><?php echo $ar[$i]->price; ?></td>
                         <td><?php echo $ar[$i]->qty; ?></td>
                         <td><?php echo $ar[$i]->price * $ar[$i]->qty; ?></td>
                         <td><button class="btn btn-danger" onclick="deleteItem(<?php echo $ar[$i]->productid ?>)"><i class="fa fa-trash"></i></button></td>
                     </tr>
                <?php
                }
                ?>
                    <tr>
                        <th colspan="5" style="text-align: right;">Grand Total</th>
                        <th colspan="2">Rs.<?php echo $grd_ttl; ?></th>

                <tr>
                    <td colspan="7" style="text-align: center;">
                        <a href="index.php" class="btn btn-warning">Continue Shopping</a>
                        <a href="proceedpayment.php" class="btn btn-success">Proceed to Payment</a>
                    </td>
                </tr>
                <?php
            }else{
                ?>
            <tr>
                <th colspan="6" class="text-center">
                    <h3>CART IS EMPTY</h3>
                    <img src="images/emptycart.png" width="300">
                </th>
            </tr>
            <?php
            }
            ?>
        </table>

    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>