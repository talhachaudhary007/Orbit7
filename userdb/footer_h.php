
<!--  -->

<footer>
    <div class="up-footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="widget footer-widgets twitter-widget">
                        <h4>Recent Tweets</h4>
                        <ul class="tweets">
                            <li>
                                <p><a class="tweet-acc" href="#">@premiumlayers</a> Thanks for the head up! : <a href="#">http://support.envato.com</a> was very helpful</p>
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

<!--
##############################
- ACTIVATE THE BANNER HERE -
##############################
-->
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

            onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

            thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
            thumbHeight:50,
            thumbAmount:3,

            hideThumbs:0,
            navigationType:"none",				// bullet, thumb, none
            navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

            navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


            navigationHAlign:"center",				// Vertical Align top,center,bottom
            navigationVAlign:"bottom",					// Horizontal Align left,center,right
            navigationHOffset:30,
            navigationVOffset: 40,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:0,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:0,
            soloArrowRightVOffset:0,

            touchenabled:"on",						// Enable Swipe Function : on/off


            stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
            stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

            hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
            hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
            hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


            fullWidth:"on",

            shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

        });


        // TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
        // YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
            api.bind("revolution.slide.onloaded",function (e) {


                jQuery('.tparrows').each(function() {
                    var arrows=jQuery(this);

                    var timer = setInterval(function() {

                        if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
                          arrows.fadeOut(300);
                    },3000);
                })

                jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
                    jQuery('.tp-simpleresponsive').addClass("mouseisover");
                    jQuery('body').find('.tparrows').each(function() {
                        jQuery(this).fadeIn(300);
                    });
                }, function() {
                    if (!jQuery(this).hasClass("tparrows"))
                        jQuery('.tp-simpleresponsive').removeClass("mouseisover");
                })
            });
        // END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
    });
</script>
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
</body>
</html>
