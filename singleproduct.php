<?php
@session_start();
include("connection.php");
$productid = $_GET['productid'];
$sel = "select * from producttable where productid='$productid'";
$res = mysqli_query($con,$sel);
if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_array($res);
}
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

<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
            <li>Single Product</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    <?php include("categoryLinks.php"); ?>
    <div class="w3l_banner_nav_right">
<!--        <div class="w3l_banner_nav_right_banner3">-->
<!--            <h3>Best Deals For New Products<span class="blink_me"></span></h3>-->
<!--        </div>-->
        <div class="agileinfo_single">
            <h5><?php echo $row['productname']; ?></h5>
            <div class="row">
                <div class="col-md-4 agileinfo_single_left">
                    <img id="example" src="productimages/<?php echo $row['photo']; ?>" alt=" " class="img-fluid" />
                </div>
                <div class="col-md-8 agileinfo_single_right">
<!--                    <div class="rating1">-->
<!--							<span class="starRating">-->
<!--								<input id="rating5" type="radio" name="rating" value="5">-->
<!--								<label for="rating5">5</label>-->
<!--								<input id="rating4" type="radio" name="rating" value="4">-->
<!--								<label for="rating4">4</label>-->
<!--								<input id="rating3" type="radio" name="rating" value="3" checked>-->
<!--								<label for="rating3">3</label>-->
<!--								<input id="rating2" type="radio" name="rating" value="2">-->
<!--								<label for="rating2">2</label>-->
<!--								<input id="rating1" type="radio" name="rating" value="1">-->
<!--								<label for="rating1">1</label>-->
<!--							</span>-->
<!--                    </div>-->
                    <div class="w3agile_description">
                        <h4>Description :</h4>
                        <p><?php echo $row['descp']; ?></p>
                    </div>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb agileinfo_single_right_snipcart">
                            <h4>Rs.<?php echo $row['price']; ?> <span>Rs.<?php echo $row['mrp']; ?></span></h4>
                            <p style="font-size:12px;margin-top:5px;">You Save Rs.<?php echo ($row['mrp']-$row['price']); ?></p>
                        </div>
                        <div class="snipcart-details agileinfo_single_right_details">
                            <input type="button" onclick="addtocart(<?php echo $row['productid']; ?>)" name="submit" value="Add to cart"
                                   class="button" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- //banner -->
<!-- brands -->
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
    <div class="container">
        <h3>Similar Products</h3>
        <div class="w3ls_w3l_banner_nav_right_grid1">
<!--            <h6>food</h6>-->
<!--            <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">-->
            <div class="row pro-grids-inn">
                    <?php
                    $sel1 = "select * from producttable where subcatid='".$row['subcatid']."' and productid<>'".$productid."' order by rand() LIMIT 0,4";
                    $res1 = mysqli_query($con,$sel1);
                    while($row1 = mysqli_fetch_array($res1)){
                        ?>
                        <div class="col-md-3 w3ls_w3l_banner_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
    <!--                                <div class="agile_top_brand_left_grid_pos">-->
    <!--                                    <img src="assets/images/offer.png" alt=" " class="img-fluid" />-->
    <!--                                </div>-->
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="singleproduct.php?productid=<?php echo $row1['productid']; ?>"><img
                                                                src="productimages/<?php echo $row1['photo']; ?>" alt=" " style="width:200px;height:180px;"  class="img-fluid" /></a>
                                                    <p><?php echo $row1['productname']; ?></p>
                                                    <h4>Rs.<?php echo $row1['price']; ?><span>Rs.<?php echo $row1['mrp']; ?></span></h4>
                                                </div>
                                                <div class="snipcart-details">
                                                    <input type="button" name="submit" onclick="addtocart(<?php echo $row1['productid']; ?>)"
                                                           value="Add to cart"
                                                           class="button" />
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
            </div>
<!--        </marquee>-->
        </div>
    </div>
</div>
<!-- //brands -->
<div style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->
</div>

<?php include("footer.php"); ?>
</body>
</html>