<!-- Footer Start -->
<?php
$info = $cmsClass->getCompanyInfo();
$address = $info['address'];
$state = $info['state'];
$city = $info['city'];
$email = $info['email'];
$contactNo = $info['contact'];
$zip = $info['zip'];
$country = $info['country'];
?>
<footer id="footer">
    <!-- Footer Top Start -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-four">
                    <h3>Contact Us</h3>
                    <ul class="contact-us">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <p>
                                <strong class="contact-pad">Address:</strong> <?php echo $address; ?>,<br> <?php echo $state . ' ' . $city . ',<br>' . $country . ', ' . $zip ; ?> <br>
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <p><strong>Phone:</strong> <?php echo $contactNo; ?></p>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <p><strong>Email:</strong><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                        </li>
                    </ul>
                </section>
                <section class="col-lg-6 col-md-6 col-xs-12 col-sm-12 footer-three">
                    <h3>Photostream</h3>
                    <ul id="flickrfeed" class="thumbs"></ul>
                </section>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->
    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 "> &copy; Copyright 2017 by <a href="index">ILearning Inc.</a>. All Rights Reserved. </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                    <ul class="social social-icons-footer-bottom">
                        <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>
<!-- Scroll To Top -->
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
</div>

<!-- The Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.wait.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/superfish.js"></script>
<script src="js/tweetMachine.js"></script>
<script src="js/tytabs.js"></script>
<script src="js/jquery.gmap.min.js"></script>
<script src="js/circularnav.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jflickrfeed.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/spectrum.js"></script>
<script src="js/switcher.js"></script>
<script src="js/custom.js"></script>
</body>
</html>