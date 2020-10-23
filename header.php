<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="" href="">
    <link rel="shortcut icon" type="image/png" href="assets/images/fevicon.png" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
                    <ul>
                        <li><a href="#about-section">About</a></li>
                        <li><a href="#services-section">Services</a></li>
                        <li><a href="#the-buzz">The Buzz</a></li>
                        <li><a href="#blog-section">The Blog</a></li>
                        <li><a href="#contact-section">Contact</a></li>
                    </ul>
                </nav>
                <div class="h-social-icon">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-bar">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </header>