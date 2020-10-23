<?php


// To add Style Sheet 
function css_resourses(){
    wp_enqueue_style('style',get_stylesheet_uri() );
}
add_action('wp_enqueue_script','css_resourses');



//Logo Code
add_theme_support( 'custom-logo' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ));