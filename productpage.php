<?php
session_start();
include("connection.php");
$subcatid = "";
$search = "";
if(isset($_GET['subcatid'])){
    $subcatid = $_GET['subcatid'];
    $qrSubCat = "select subcatname from subcategorytable where subcatid='$subcatid'";
    $resSubCat = mysqli_query($con,$qrSubCat);
    $rowSubCat = mysqli_fetch_array($resSubCat);
}

if(isset($_GET['search'])){
    $search = $_GET['search'];
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
<div class="banner">
    <?php include("categoryLinks.php"); ?>
    <div class="w3l_banner_nav_right">
<!--        <div class="w3l_banner_nav_right_banner3">-->
<!--            <h3>Best Deals For New Products<span class="blink_me"></span></h3>-->
<!--        </div>-->
        <div class="container">
            <div class="w3ls_w3l_banner_nav_right_grid">
                <h3 class="mt-4">Products</h3>
                <div class="w3ls_w3l_banner_nav_right_grid1">
                    <?php
                    if($subcatid==''){
                        echo "<h6></h6>";
                    }elseif ($subcatid!=''){
                        echo "<h6>".$rowSubCat['subcatname']."</h6>";
                    }
                    ?>

                    <div class="row pro-grids-inn">
                        <?php
                        if($subcatid == '' && $search == ""){
                            $selProd = "select * from producttable order by productid desc LIMIT 0,12";
                        }else if($subcatid!=""){
                            $selProd = "select * from producttable where subcatid='$subcatid'";
                        }else if($search!=""){
                            $selProd = "select * from producttable where productname LIKE '%$search%'";
                        }

                        $resProd = mysqli_query($con,$selProd);
                        while($rowProd = mysqli_fetch_array($resProd)){
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
                                                        <a href="singleproduct.php?productid=<?php echo $rowProd[0]; ?>"><img src="productimages/<?php
                                                            echo  $rowProd['photo'] ?>" alt=" " style="width:200px;height:180px;"    class="img-fluid" /></a>
                                                        <p><?php echo $rowProd['productname']; ?></p>
                                                        <h4>Rs.<?php echo $rowProd['price']; ?> <span>Rs.<?php echo $rowProd['mrp']; ?></span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <input type="button" onclick="addtocart(<?php echo $rowProd['productid']; ?>)" name="submit"
                                                               value="Add to cart" class="button" />
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