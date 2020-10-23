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
            <div class="the-buzz-client">
                <h2 class="client-feedback">“I feel like I have more energy throughout the day – before and after my
                    workouts!”</h2>
                <h4 class="client-name">Sarah L.</h4>
                <h6><span>Age 19</span> | Distance Swimmer</h6>
            </div>
            <div class="the-buzz-client">
                <h2 class="client-feedback">“I feel like I have more energy throughout the day – before and after my
                    workouts!”</h2>
                <h4 class="client-name">Sarah L.</h4>
                <h6><span>Age 19</span> | Distance Swimmer</h6>
            </div>
            <div class="the-buzz-client">
                <h2 class="client-feedback">“I feel like I have more energy throughout the day – before and after my
                    workouts!”</h2>
                <h4 class="client-name">Sarah L.</h4>
                <h6><span>Age 19</span> | Distance Swimmer</h6>
            </div>
            <div class="the-buzz-client">
                <h2 class="client-feedback">“I feel like I have more energy throughout the day – before and after my
                    workouts!”</h2>
                <h4 class="client-name">Sarah L.</h4>
                <h6><span>Age 19</span> | Distance Swimmer</h6>
            </div>
        </div>
    </div>
</section>

<section class="blog-section" id="blog-section">
    <div class="container">
        <h1>News & Blog</h1>
        <div class="blog-flex">
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
            <div class="blog-col">
                <div class="blog-img" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/blog-img2.png');">
                    <span class="blog-date">Feb 12, 2020</span>
                </div>
                <div class="blog-text">
                    <h5>How to Connect andPrepare Data
                        for Search</h5>
                    <p>Nunc purus est, consequat condimentum faucibus sed, iaculis sit amet massa.</p>
                    <a href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="blog-col">
                <div class="blog-img" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/blog-img3.png');">
                    <span class="blog-date">Feb 12, 2020</span>
                </div>
                <div class="blog-text">
                    <h5>ThoughtSpot Embedded Analytics</h5>
                    <p>Fusce ac condimentum turpis. Ut consequat lacinia augue, vitae aliquam sapien ullamcorper at.
                    </p>
                    <a href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>