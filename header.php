<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="" href="">
    <link rel="shortcut icon" type="image/png" href="assets/images/fevicon.png" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/all.css">


    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header-flex">
            <div class="logo">
                <!-- <a href="#home-banner"><img src="assets/images/logo.png" alt="logo"></a> -->
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
            </div>
            <div class="cus-navigation">
                <nav>
                    <?php 
                        $args =array(
                            'header-menu' => 'Header Menu'
                        );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </nav>
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
            <div class="menu-bar">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </header>