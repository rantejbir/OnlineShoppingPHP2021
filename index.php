<?php
include("connection.php");
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
<?php include("header.php"); ?>

<!-- banner -->
<div class="banner">
    <?php include("categoryLinks.php"); ?>
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3>Stay home & get
                                <span>your daily</span> need's</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                   data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3>Make your <span>food</span> with Spicy.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                   data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>Compare & Save <i>30% Money</i> </h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                   data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->
<div class="container-fluid mx-lg-0">
    <div class="banner_bottom">
        <div class="wthree_banner_bottom_left_grid_sub">
        </div>
        <div class="row wthree_banner_bottom_left_grid_sub1">
            <div class="col-lg-4 col-md-6 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="images/4.jpg" alt=" " class="img-fluid radius-image" />
                    <div class="wthree_banner_bottom_left_grid_pos">
                        <h4>Discount Offer <span>25%</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="images/5.jpg" alt=" " class="img-fluid radius-image" />
                    <div class="wthree_banner_btm_pos">
                        <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wthree_banner_bottom_left mt-lg-0 mt-5">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="images/6.jpg" alt=" " class="img-fluid radius-image" />
                    <div class="wthree_banner_btm_pos1">
                        <h3>Save <span>Upto</span> $10</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Your Daily Staples</h3>
        <div class="row agile_top_brands_grids">
            <?php
            $qrProd = "select * from producttable order by productid desc LIMIT 0,4";
            $resProd = mysqli_query($con,$qrProd);
            while($rowProd = mysqli_fetch_array($resProd)){
                ?>
                <div class="col-lg-3 col-sm-6 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
<!--                            <div class="tag"><img src="images/tag.png" alt=" " class="img-fluid" /></div>-->
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="singleproduct.php?productid=<?php echo $rowProd['productid']; ?>"><img title=" " alt=" "
                                                                                                               src="productimages/<?php
                                                echo $rowProd['photo'] ?>"
                                                                       class="img-fluid" style="width:250px;height: 220px;" /></a>
                                            <p><?php echo $rowProd['productname']; ?></p>

                                            <h4><?php echo $rowProd['price']; ?> <span>Rs.<?php echo $rowProd['mrp']; ?></span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <input type="button" name="submit"
                                                   onclick="addtocart(<?php echo $rowProd['productid']; ?>)" value="Add to cart"
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
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
<div class="fresh-vegetables">
    <div class="container">
        <h3>Top Products</h3>
        <div class="row w3l_fresh_vegetables_grids">
            <div class="col-lg-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left pl-lg-0">
                <div class="w3l_fresh_vegetables_grid2">
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="subcategorypage.php">All Categories</a>
                        </li>
                        <?php
                        $sel = "select * from categorytable order by categoryname";
                        $res = mysqli_query($con,$sel);
                        while($row=mysqli_fetch_array($res)){
                            ?>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="subcategorypage.php?categoryid=<?php echo $row['categoryid'];
                                ?>"><?php echo $row['categoryname']; ?></a></li>
                            <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <div class="col-lg-9 w3l_fresh_vegetables_grid_right mt-lg-0 mt-5">
                <div class="row">
                    <div class="col-lg-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="images/8.jpg" alt=" " class="img-fluid radius-image" />
                        </div>
                    </div>
                    <div class="col-lg-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <div class="w3l_fresh_vegetables_grid1_rel">
                                <img src="images/7.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                    <div class="more m1">
                                        <a href="products.html"
                                           class="button--saqui button--round-l button--text-thick"
                                           data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="images/10.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                                <h5>Special Offers</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 w3l_fresh_vegetables_grid mt-lg-0 mt-5">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="images/9.jpg" alt=" " class="img-fluid radius-image" />
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="images/11.jpg" alt=" " class="img-fluid radius-image" />
                        </div>
                    </div>

                </div>
                <div class="agileinfo_move_text">
                    <div class="agileinfo_marquee">
                        <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                    </div>
                    <div class="agileinfo_breaking_news">
                        <span> </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- //fresh-vegetables -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->
</div>

<?php include("footer.php"); ?>
</body>
</html>