<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 w3_footer_grid">
                <h3>information</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="events.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> Events</a>
                    </li>
                    <li><a href="about.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> About Us</a>
                    </li>
                    <li><a href="products.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> Best
                            Deals</a></li>
                    <li><a href="services.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                            Services</a></li>
                    <li><a href="short-codes.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> Short
                            Codes</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 w3_footer_grid">
                <h3>policy info</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="faqs.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> FAQ</a></li>
                    <li><a href="privacy.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> privacy
                            policy</a></li>
                    <li><a href="privacy.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> terms of
                            use</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 w3_footer_grid">
                <h3>what in stores</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="pet.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> Pet Food</a>
                    </li>
                    <li><a href="frozen.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> Frozen
                            Snacks</a></li>
                    <li><a href="kitchen.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> Kitchen</a>
                    </li>
                    <li><a href="products.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i> Branded
                            Foods</a></li>
                    <li><a href="household.html"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                            Households</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 w3_footer_grid">
                <h3>twitter posts</h3>
                <ul class="w3_footer_grid_list1">
                    <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam
								<a href="#">http://sd.ds/13jklf#</a>
								eius modi tempora incidunt ut labore et
								<a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
                    <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam
								<a href="#">http://fd.uf/56hfg#</a>
								eius modi tempora incidunt ut labore et
								<a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
                </ul>
            </div>
        </div>
        <div class="row agile_footer_grids">
            <div class="col-lg-3 col-sm-6 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h4>100% secure payments</h4>
                    <img src="images/card.png" alt=" " class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h5>connect with us</h5>
                    <ul class="agileits_social_icons">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="wthree_footer_copy">
            <p>© 2022 EShop Bazaar. All rights reserved | Design by <a href="http://vmmeducation.com/">VMM (Veenus Mind Media)</a>
            </p>
        </div>
    </div>
</div>
<!-- //footer -->

<!-- Bootstrap Core JavaScript -->
<script src="js/theme-change.js"></script>
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- js -->
<!--<script src="js/jquery-1.11.1.min.js"></script>-->
<!-- //js -->
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function () {
        var navoffeset = $(".agileits_header").offset().top;
        $(window).scroll(function () {
            var scrollpos = $(window).scrollTop();
            if (scrollpos >= navoffeset) {
                $(".agileits_header").addClass("fixed");
            } else {
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<!-- //script-for sticky-nav -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
<script src="js/minicart.js"></script>
<script>
    paypal.minicart.render();

    paypal.minicart.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<script src="js/bootstrap.min.js"></script>


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>

