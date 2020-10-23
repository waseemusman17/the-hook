<footer id="contact-section">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-logo-col">
                            <div class="footer-logo">
                                <a href="#"><img src="<?php the_field("footer_logo" , 'option'); ?>" alt="footer-logo"></a>
                            </div>
                            <p><?php the_field("footer_description", 'option'); ?></p>
                            <div class="h-social-icon">
                                <ul>
                                    <?php

                                        // Check rows exists.
                                        if( have_rows('social_link' , 'option') ):

                                            // Loop through rows.
                                            while( have_rows('social_link' , 'option') ) : the_row(); ?>
                                                <li><a href="<?php the_sub_field("social_icon_link" ,"option"); ?>"><?php the_sub_field("social_icon_code" ,"option"); ?></a></li>
                                            <?php
                                            // End loop.
                                            endwhile;

                                        endif;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-col">
                            <h2>Feel Free To Get In Touch With Us Via Email Or Phone</h2>
                            <div class="contact-info-links">
                                <ul>
                                    <li><a href="mailto:<?php the_field("footer_contact_email" , 'option'); ?>"><?php the_field("footer_contact_email", 'option'); ?></a></li>
                                    <li><a href="tel:<?php the_field("footer_contact_phone" , 'option'); ?>"><?php the_field("footer_contact_phone" , 'option'); ?></a></li>
                                </ul>
                                <address>
                                <?php the_field("footer_contact_address" , 'option'); ?>
                                </address>
                                <div class="contact-info-form">
                                    <label>Subscribe to Our Newsletter</label>
                                    <form>
                                        <div class="subscribe-form-input">
                                            <input type="email" placeholder="Email Address">
                                            <input type="submit" value="Subscribe">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p><?php the_field("copyright_text" , 'option'); ?></p>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.1.1.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>

    <?php wp_footer(); ?>
</body>

</html>