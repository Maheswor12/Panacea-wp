<?php get_header(); ?>
<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9941484961255!2d85.33311621459144!3d27.686575733012415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19959404d125%3A0x8e5749ccf3886212!2sPANACEA+EDUCATION+FOUNDATION+PVT.LTD!5e0!3m2!1sen!2snp!4v1561891954623!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<section class="contform">
    <div class="mycontainer">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12">
                <h4>Panacea Education Foundation Pvt. Ltd.</h4>
                <div class="sector"></div>
                <div class="coninfo">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="clogo">
                                <i class="flaticon-map"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                            <div class="descnt">
                                <?php if (cs_get_option('header_subaddress') != "") : ?>
                                    <span>Location</span><br> <?php echo cs_get_option('header_address'); ?>, <?php echo cs_get_option('header_subaddress'); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="clogo">
                                <i class="flaticon-opened-email-envelope"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                            <div class="descnt">
                                <?php if (cs_get_option('header_email') != "") : ?>
                                    <span>Mail</span><br><?php echo cs_get_option('header_email'); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="clogo">
                                <i class="flaticon-old-telephone-ringing"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                            <div class="descnt">
                                <?php if (cs_get_option('office_phone') != "") : ?>
                                    <Span>Contact Number</Span><br><?php echo cs_get_option('office_phone'); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <h4><strong>Send us message</strong></h4>
                <div class="forms">
                    <?php echo do_shortcode('[contact-form-7 id="197" title="contact fom 2"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>