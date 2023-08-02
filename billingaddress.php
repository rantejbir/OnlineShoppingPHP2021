<?php
include("cart.php");
@session_start();
include("connection.php");
$useremail = $_SESSION['USEREMAIL'];
$qr = "select * from usertable where email='$useremail'";
$res = mysqli_query($con,$qr);
$row = mysqli_fetch_array($res);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php"); ?>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $(document).ready(function(){
            $('#frmBilling').validate();
        })
    </script>
</head>
<body>
<?php include("userheader.php"); ?>
<div class="container">
    <div class="col-md-12 col-12">
        <h1 class="text-center">Billing Information</h1>
        <div class="row">
            <div class="col-md-7 col-7">
                <h3>Billing Address</h3>
                <form method="post" enctype="multipart/form-data" id="frmBilling">
                    <label class="mt-3">Enter Fullname</label>
                    <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>" class="form-control"
                           data-rule-required="true"
                           data-msg-required="Please
                    Enter
                Fullname">
                    <label class="mt-3">Enter Mobileno</label>
                    <input type="number" name="mobileno" id="mobileno" value="<?php echo $row['mobileno'] ?>" class="form-control"
                           data-rule-required="true"
                           data-msg-required="Please Enter
                Mobileno">
                    <label class="mt-3">Enter Address</label>
                    <textarea name="address" id="address" class="form-control"  data-rule-required="true"
                              data-msg-required="Please Enter
                Address"><?php echo $row['address'] ?></textarea>
                    <label class="mt-3">Enter City</label>
                    <input type="text" name="city" id="city"  value="<?php echo $row['city'] ?>" class="form-control" data-rule-required="true"
                           data-msg-required="Please
                Enter City">
                    <label class="mt-3">Enter State</label>
                    <input type="text" name="state" id="state"  value="<?php echo $row['state'] ?>" class="form-control" data-rule-required="true"
                           data-msg-required="Please
                Enter State">
                    <label>Payment Method</label>
                    <select data-rule-required="true" data-msg-required="Please Select Payment Method" name="paymentmethod" id="paymentmethod"
                            class="form-control">
                        <option value="">Select</option>
                        <option value="Card">By Card</option>
                        <option value="COD">Cash on Delivery</option>
                    </select>
                    <button type="button"  onclick="pay()" class="btn btn-primary m-3">Confirm Order</button>
                </form>
            </div>
            <div class="col-md-5 col-5">
                <h3>Cart Detail</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Srno</th>
                        <th>Product Name</th>
                        <th>Photo</th>
                        <th>Price(Rs)</th>
                        <th>Qty</th>
                        <th>Total(Rs)</th>
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
                                <td><img width="80" height="60" src="productimages/<?php echo $ar[$i]->photo; ?>" /></td>
                                <td><?php echo $ar[$i]->price; ?></td>
                                <td><?php echo $ar[$i]->qty; ?></td>
                                <td><?php echo $ar[$i]->price * $ar[$i]->qty; ?></td>
                                 </tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <th colspan="5" style="text-align: right;">Grand Total</th>
                            <th colspan="2">Rs.<?php echo $grd_ttl; ?></th>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <input type="hidden" name="grandtotal" id="grandtotal" value="<?php echo $grd_ttl; ?>">
            </div>
        </div>

    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>