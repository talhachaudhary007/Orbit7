
<!-- footer 
    ================================================== -->
<footer>
    <div class="up-footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="widget footer-widgets twitter-widget">
                        <h4>Recent Tweets</h4>
                        <ul class="tweets">
                            <li>
                                <p><a class="tweet-acc" href="#">@premiumlayers</a> Thanks for the head up! :) <a href="#">http://support.envato.com</a> was very helpful</p>
                                <span>3 days ago</span>
                            </li>
                            <li>
                                <p><a class="tweet-acc" href="#">@envato</a> <a href="#">http://support.envato.com</a> </p>
                                <span>4 days ago</span>
                            </li>
                            <li>
                                <p><a class="tweet-acc" href="#">@premiumlayers </a> Well that's awesome thing</p>
                                <span>5 days ago</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget footer-widgets flickr-widget">
                        <h4>Flickr Gallery</h4>
                        <ul class="flickr-list">
                            <li><a href="#"><img alt="" src="images/flickr1.png"></a></li>
                            <li><a href="#"><img alt="" src="images/flickr2.png"></a></li>
                            <li><a href="#"><img alt="" src="images/flickr3.png"></a></li>
                            <li><a href="#"><img alt="" src="images/flickr4.png"></a></li>
                            <li><a href="#"><img alt="" src="images/flickr5.png"></a></li>
                            <li><a href="#"><img alt="" src="images/flickr6.png"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget footer-widgets tag-widget">
                        <h4>Tags</h4>
                        <ul class="tag-widget-list">
                            <li><a href="#">web design</a></li>
                            <li><a href="#">coding</a></li>
                            <li><a href="#">wordpress</a></li>
                            <li><a href="#">woo commerce</a></li>
                            <li><a href="#">php</a></li>
                            <li><a href="#">photography</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget footer-widgets info-widget">
                        <h4>Contact Us</h4>
                        <ul class="contact-list">
                            <li><a class="phone" href="#"><i class="fa fa-phone"></i><span>9930 1234 5679</span></a></li>
                            <li><a class="mail" href="#"><i class="fa fa-envelope"></i><span>contact@yourdomain.com</span></a></li>
                            <li><a class="address" href="#"><i class="fa fa-home"></i><span>street address example</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-line">
        <div class="container">
            <div class="footer-line-in">
                <div class="row">
                    <div class="col-md-8">
                        <p>&#169; 2013 Extensivo,  All Rights Reserved</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>						
            </div>
        </div>
    </div>

</footer>
<!-- End footer -->

<div class="fixed-link-top">
    <div class="container">
        <a class="go-top" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
</div>

</div>
<!-- End Container -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.migrate.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.nouislider.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/plugins-scroll.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>

<script>
jQuery(function(){ 
    DevSolutionSkill.init('circle'); 
    DevSolutionSkill.init('circle2'); 
    DevSolutionSkill.init('circle3'); 
    DevSolutionSkill.init('circle4'); 
    DevSolutionSkill.init('circle5'); 
    DevSolutionSkill.init('circle6');
});
</script>

<script type="text/javascript">
    var tpj=jQuery;
    tpj.noConflict();

    tpj(document).ready(function() {

        if (tpj.fn.cssOriginal!=undefined)
            tpj.fn.css = tpj.fn.cssOriginal;

        var api = tpj('.fullwidthbanner').revolution(
            {
                delay:8000,
                startwidth:1170,
                startheight:500,
                // additional options...

            });

        // TO HIDE THE ARROWS SEPARATELY FROM THE BULLETS
        api.bind("revolution.slide.onloaded",function (e) {
            jQuery('.tparrows').each(function() {
                var arrows=jQuery(this);
                var timer = setInterval(function() {
                    if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
                        arrows.fadeOut(300);
                },3000);
            });
            jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
                jQuery('.tp-simpleresponsive').addClass("mouseisover");
                jQuery('body').find('.tparrows').each(function

() {
                    jQuery(this).fadeIn(300);
                });
            }, function() {
                if (!jQuery(this).hasClass("tparrows"))
                    jQuery('.tp-simpleresponsive').removeClass("mouseisover");
            });
        });
        // END OF HIDING ARROWS SEPARATELY FROM BULLETS

    });
</script>

</body>
</html>

