<?php /*Template Name: Home Page*/ get_header(); ?>

<section class="home-banner" id="home-banner" style="background-image: url('<?php the_field('background_image'); ?>');">
    <div class="container">
        <div class="home-img">
            <img src="<?php the_field("banner_logo_image"); ?>" alt="home-img">
        </div>
    </div>
</section>

<section class="about-section" id="about-section">
    <div class="hook-creative">
        <h1><?php the_field("about_title"); ?></h1>
        <p><?php the_field("about_description"); ?></p>
    </div>
</section>

<section class="services-section" id="services-section">
    <h1 class="services-title">Services</h1>
    <div class="services-flex-width">
        

        <?php
            if( have_rows('service') ):
                while( have_rows('service') ) : the_row();?>

                    <div class="services-main-col">
                        <div class="services-img" style="background-image: url('<?php the_sub_field("service_image"); ?>') " >
                            <h3><?php the_sub_field("service_title"); ?></h3>
                        </div>

                        <div class="services-list-text">
                            <ul>
                            
                            <?php  if( have_rows('service_list') ):?>
                                <?php while( have_rows('service_list') ) : the_row();?>
                                    <li><?php the_sub_field("service_item_text"); ?></li>
                                <?php endwhile; 
                            endif; ?>

                            </ul>
                        </div>
                    
                    </div>
                <?php
                endwhile;
            endif;
        ?>

    </div>
</section>

<section class="the-buzz-section" id="the-buzz">
    <div class="container">
        <h4>Our Customers LOVE Our Services</h4>
        <div class="owl-carousel">
            <!-- <div class="the-buzz-client">
                <h2 class="client-feedback">“I feel like I have more energy throughout the day – before and after my workouts!”</h2>
                <h4 class="client-name">Sarah L.</h4>
                <h6><span>Age 19</span> | Distance Swimmer</h6>
            </div> -->
            <?php

            // Check rows exists.
            if( have_rows('customer_review_slider') ):

                // Loop through rows.
                while( have_rows('customer_review_slider') ) : the_row();?>

                    <div class="the-buzz-client">
                        <h2 class="client-feedback"><?php the_sub_field("customer_feedback"); ?></h2>
                        <h4 class="client-name"><?php the_sub_field("customer_name"); ?></h4>
                        <h6><span>Age <?php the_sub_field("customer_age"); ?></span> | <?php the_sub_field("customer_interest"); ?></h6>
                    </div>

                <?php // End loop.
                endwhile;
            endif;?>
            
        </div>
    </div>
</section>

<section class="blog-section" id="blog-section">
    <div class="container">
        <h1>News & Blog</h1>
        <div class="blog-flex">

            
            
            <?php $the_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            ));
            ?>

            <?php if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="blog-col">
                        <div class="blog-img" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/blog-img1.png');">
                            <span class="blog-date">Feb 12, 2020</span>
                        </div>
                        <div class="blog-text">
                            <h5>5 Steps to Deploy Analytics 5x
                                Faster</h5>
                            <p>Aenean sed nibh a magna posuere tempor. Nunc faucibus pellentesque nunc in aliquet. Donec
                                congue, nunc vel tempor
                                congue, enim sapien lobortis ipsum, in volutpat sem ex in ligula.</p>
                            <a href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="subscribe-bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/subscribe-bg.png');">
    <div class="container">
        <div class="subscribe-flex">
            <div class="subscribe-text-col">
                <h1>Subscribe to Our Newsletter</h1>
                <p>Subscribe to our newsletter to get latest news and updated from the hook.</p>
            </div>
            <div class="subscribe-form-col">
                <form>
                    <div class="subscribe-form-input">
                        <input type="email" placeholder="Email Address">
                        <input type="submit" value="Subscribe">
                        
                        <!-- <?php echo do_shortcode('[contact-form-7 id="49" title="Subscribe Form"]'); ?> -->

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>