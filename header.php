
<!-- New toolbar-->
<style>
    * {
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }


    #w3lDemoBar.w3l-demo-bar {
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        padding: 40px 5px;
        padding-top:70px;
        margin-bottom: 70px;
        background: #0D1326;
        border-top-left-radius: 9px;
        border-bottom-left-radius: 9px;
    }

    #w3lDemoBar.w3l-demo-bar a {
        display: block;
        color: #e6ebff;
        text-decoration: none;
        line-height: 24px;
        opacity: .6;
        margin-bottom: 20px;
        text-align: center;
    }

    #w3lDemoBar.w3l-demo-bar span.w3l-icon {
        display: block;
    }

    #w3lDemoBar.w3l-demo-bar a:hover {
        opacity: 1;
    }

    #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
        color: #e6ebff;
    }
    #w3lDemoBar.w3l-demo-bar .responsive-icons {
        margin-top: 30px;
        border-top: 1px solid #41414d;
        padding-top: 40px;
    }
    #w3lDemoBar.w3l-demo-bar .demo-btns {
        border-top: 1px solid #41414d;
        padding-top: 30px;
    }
    #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
        font-size: 26px;
    }
    #w3lDemoBar.w3l-demo-bar .no-margin-bottom{
        margin-bottom:0;
    }
    .toggle-right-sidebar span {
        background: #0D1326;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        color: #e6ebff;
        border-radius: 50px;
        font-size: 26px;
        cursor: pointer;
        opacity: .5;
    }
    .pull-right {
        float: right;
        position: fixed;
        right: 0px;
        top: 70px;
        width: 90px;
        z-index: 99999;
        text-align: center;
    }
    /* ============================================================
    RIGHT SIDEBAR SECTION
    ============================================================ */

    #right-sidebar {
        width: 90px;
        position: fixed;
        height: 100%;
        z-index: 1000;
        right: 0px;
        top: 0;
        margin-top: 60px;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        overflow-y: auto;
    }


    /* ============================================================
    RIGHT SIDEBAR TOGGLE SECTION
    ============================================================ */

    .hide-right-bar-notifications {
        margin-right: -300px !important;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }



    @media (max-width: 992px) {
        #w3lDemoBar.w3l-demo-bar a.desktop-mode{
            display: none;

        }
    }
    @media (max-width: 767px) {
        #w3lDemoBar.w3l-demo-bar a.tablet-mode{
            display: none;

        }
    }
    @media (max-width: 568px) {
        #w3lDemoBar.w3l-demo-bar a.mobile-mode{
            display: none;
        }
        #w3lDemoBar.w3l-demo-bar .responsive-icons {
            margin-top: 0px;
            border-top: none;
            padding-top: 0px;
        }
        #right-sidebar,.pull-right {
            width: 90px;
        }
        #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
            margin-bottom: 0;
        }
    }
</style>

<!-- header -->
<div class="agileits_header" id="home">
    <div class="w3l_offers">
        <a href="productpage.php">Today's special Offers !</a>
    </div>
    <div class="w3l_search">
        <form id="frmSearch" class="d-flex">
            <input type="search" placeholder="Search.." name="search" id="search" required="required" autofocus="">
            <button type="button" onclick="searchProduct()"><span class="fa fa-search"></span></button>
        </form>
    </div>
    <div class="w3l_header_right w3-two-three-grids">
        <div class="product_list_header mx-lg-4">
            <a href="viewcart.php" class="button">View your cart</a>
<!--            <form action="#" method="post" class="last">-->
<!--                <fieldset>-->
<!--                    <input type="hidden" name="cmd" value="_cart" />-->
<!--                    <input type="hidden" name="display" value="1" />-->
<!--                    <input type="submit" name="submit" value="View your cart" class="button" />-->
<!--                </fieldset>-->
<!--            </form>-->
        </div>
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle text-center" data-toggle="dropdown"><i class="fa fa-user mr-2"
                                                                                          aria-hidden="true"></i><span class="fa fa-angle-down"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="userlogin.php">Login</a></li>
                            <li><a href="usersignup.php">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        <div class="w3l_header_right1 contact-bantbtn ml-lg-4">
            <h2><a href="mail.html">Contact Us</a></h2>
        </div>
    </div>
</div>
<div class="logo_products">
    <header id="site-header">
        <section class="w3l-header-4 sec-part-4">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-lg-0">
                    <h1> <a class="navbar-brand" href="index.php">
                            <span class="capw3">C</span>orner <span class="subcap">Store</span>
                        </a></h1>
                    <ul class="navbar-nav mx-lg-auto mt-lg-0 mt-3">
                        <li class="nav-item active">
                            <a class="nav-link" href="events.html">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">Best Deals</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>


                    </ul>
                    <ul class="navbar-nav search-right mt-lg-0 mt-2 w3ls_logo_products_left1 mr-lg-3">
                        <ul class="phone_email">
                            <li><a href="tel:(+0123)234-547" class=""><i class="fa fa-phone" aria-hidden="true"></i> (+0123) 234 567</li>
                            <li><a href="mailto:store@corner.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> store@corner.com</a></li>
                        </ul>
                    </ul>

                    <!-- //toggle switch for light and dark theme -->

                    <!-- toggle switch for light and dark theme -->
                    <div class="mobile-position">
                        <nav class="navigation">
                            <div class="theme-switch-wrapper">
                                <label class="theme-switch" for="checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <div class="mode-container">
                                        <i class="gg-sun"></i>
                                        <i class="gg-moon"></i>
                                    </div>
                                </label>
                            </div>
                        </nav>
                    </div>
                </nav>
            </div>
        </section>
    </header>
    <!--//header-->
</div>
<!-- //header -->
<script src="myscript.js"></script>
<style>
    .product_list_header .button {
        color: #fff;
        font-size: 14px;
        outline: none;
        text-transform: capitalize;
        padding: 0.7em 2.5em 0em 1em;
        border: 1px solid var(--primary-color);
        margin: 3px 0;
        background: var(--primary-color) url('images/cart.png') no-repeat 116px 13px;
        height: 44px;
        border-radius: var(--border-radius);
        width:150px;
        display: inline-block;
    }
</style>