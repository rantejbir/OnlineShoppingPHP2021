<?php
include("connection.php");
?>
<div class="w3l_banner_nav_left">
    <nav class="navbar navbar-expand-lg navbar-light p-lg-0">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa icon-expand fa-bars"></span>
            <span class="fa icon-close fa-times"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav_1">
                <li class="nav-item"><a class="nav-link" href="subcategorypage.php">All Categories</a></li>
                <?php
                $qr1 = "select * from categorytable";
                $res1 = mysqli_query($con,$qr1);
                while($row1 = mysqli_fetch_array($res1)){
                ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $row1['categoryname']; ?> <span class="fa fa-angle-down"></span>
                        </a>

                        <div class="dropdown-menu w3ls_vegetables_menu" aria-labelledby="navbarDropdown">
                        <?php
                        $qr2 = "select * from subcategorytable where categoryid=$row1[0]";
                        $res2 = mysqli_query($con,$qr2);
                        while($row2 = mysqli_fetch_array($res2)){
                            ?>
                                <a class="dropdown-item" href="productpage.php?subcatid=<?php echo $row2['subcatid']; ?>" class="drop-text"><?php
                                    echo $row2['subcatname']; ?></a>
                        <?php
                        }
                        ?>

        </div>
                    </li>
                <?php
                }
                ?>


            </ul>
        </div>
    </nav>
</div>