<button onclick="topFunction()" id="myBtn"><i class="fas fa-chevron-up"></i></button>

<section class="flatinfo-wrap">
    <div class="mycontainer">
        <div class="row">
            <div class="col-lg-12">
                <button class="uper"><i class="fas fa-sort-up"></i></button>
                <div class="flatinfo">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/university"><i class="fas fa-university"></i> Universities</a></li>
                        <li><a href="<?php echo home_url(); ?>/studyjapan"><i class="fas fa-info-circle"></i> Introduction to Japan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="upper-footer">
    <div class="mycontainer">
        <div class="row">

            <!--Footer Widget-->
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                <div class="footer-widget">
                    <h4>Contact Us</h4>
                    <div class="text">PANACEA EDUCATION FOUNDATION

                    </div>
                    <ul class="info">
                        <?php if (cs_get_option('header_address') != "") : ?>
                            <li><strong>Address:</strong> <?php echo cs_get_option('header_address'); ?>, <?php echo cs_get_option('header_subaddress'); ?></li>
                        <?php endif; ?>
                        <?php if (cs_get_option('header_email') != "") : ?>
                            <li><strong>Email:</strong><?php echo cs_get_option('header_email'); ?></li>
                        <?php endif; ?>
                        <?php if (cs_get_option('office_phone') != "") : ?>
                            <li><strong>Phone:</strong><?php echo cs_get_option('office_phone'); ?></li>
                        <?php endif; ?>
                        <?php if (cs_get_option('header_phone') != "") : ?>
                            <li><strong>Cell:</strong><?php echo cs_get_option('header_phone'); ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <!--Footer Widget-->
            <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                <div class="footer-widget">
                    <h4>Quick Links</h4>
                    <ul class="links">
                        <li><a href="<?php echo home_url(); ?>"><i class="fas fa-hand-point-right"></i>&nbsp Home</a></li>
                        <li><a href="<?php echo home_url(); ?>/about"><i class="fas fa-hand-point-right"></i>&nbsp About Us</a></li>
                        <li><a href="<?php echo home_url(); ?>/studyjapan"><i class="fas fa-hand-point-right"></i>&nbsp Study in Japan</a></li>
                        <li><a href="<?php echo home_url(); ?>/admission"><i class="fas fa-hand-point-right"></i>&nbsp Admission</a></li>
                        <li><a href="<?php echo home_url(); ?>/contact"><i class="fas fa-hand-point-right"></i>&nbsp Contact</a></li>
                    </ul>
                </div>
            </div>

            <!--Footer Widget-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="footer-widget">
                    <h4>Connect with Us</h4>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpanaceaeducationfoundation%2F&tabs=timeline&width=400&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>

            <!--Footer Widget-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="footer-widget newsletter-widget">
                    <h4>Quick Contact</h4>
                    <?php echo do_shortcode('[contact-form-7 id="160" title="Contact form 1"]'); ?>

                    <!-- <form action="" method="post" class="clearfix">
                        <p><input type="text" name="your_name" placeholder="Your Name" required=""></p>
                        <p><input type="email" name="your_email" placeholder="Your Email" required=""></p>
                        <p><textarea name="your_message" placeholder="Your Message" required=""></textarea></p>
                        <input type="submit" name="submit_btn" value="Submit Now" class="btn btn-info" style="background-color:#e1312d; color:white;">
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</section>
<div class="footer-bottom">
    <div class="mycontainer">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="copyright">
                    <?php
                    if (cs_get_option('copyright') != "") {
                        echo cs_get_option('copyright');
                    }
                    ?>.&nbsp; &copy 2019 </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="top-social">
                    <ul>
                        <?php
                        $facebook = cs_get_option('facebook');
                        if ($facebook != "") :
                            ?>
                            <li><a href="<?php echo $facebook; ?>"> <i class="fab fa-facebook-f"></i> </a></li>
                        <?php endif; ?>
                        <?php
                        $instagram = cs_get_option('instagram');
                        if ($instagram != "") :
                            ?>
                            <li><a href="<?php echo $instagram; ?>"> <i class="fab fa-instagram"></i> </a></li>
                        <?php endif; ?>
                        <?php
                        $twitter = cs_get_option('twitter');
                        if ($twitter != "") :
                            ?>
                            <li><a href="<?php echo $twitter; ?>"> <i class="fab fa-twitter"></i> </a></li>
                        <?php endif; ?>
                        <?php
                        $linkdln = cs_get_option('plus-linkdln');
                        if ($linkdln != "") :
                            ?>
                            <li><a href="<?php echo $linkdln; ?>"> <i class="fab fa-linkedin"></i> </a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function topFunction() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 'fast');
    }
</script>

<?php wp_footer(); ?>