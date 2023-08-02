<?php
include("connection.php");
$categoryid = "";
if(isset($_GET['categoryid'])){
    $categoryid = $_GET['categoryid'];
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
<?php include("header.php"); ?>
<div class="banner">
    <?php include("categoryLinks.php"); ?>
    <div class="w3l_banner_nav_right">
        <!--        <div class="w3l_banner_nav_right_banner3">-->
        <!--            <h3>Best Deals For New Products<span class="blink_me"></span></h3>-->
        <!--        </div>-->
        <div class="container">
            <div class="w3ls_w3l_banner_nav_right_grid">
                <h3 class="mt-4">Sub Categories</h3>
                <div class="w3ls_w3l_banner_nav_right_grid1">
                    <div class="row pro-grids-inn">
                        <?php
                        $selCat = "select * from subcategorytable where categoryid='$categoryid'";
                        $resCat = mysqli_query($con,$selCat);
                        while($rowCat = mysqli_fetch_array($resCat)){
                            ?>
                            <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <!--                                        <div class="agile_top_brand_left_grid_pos">-->
                                        <!--                                            <img src="images/offer.png" alt=" " class="img-fluid" />-->
                                        <!--                                        </div>-->
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"></a>
                                                        <h2 class="text-center"><?php echo $rowCat['subcatname']; ?></h2>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
<div style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->
</div>
<?php include("footer.php"); ?>
</body>
</html>