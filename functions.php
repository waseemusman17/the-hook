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

// Menu Bar
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}

add_action( 'init', 'wpb_custom_new_menu' );


//   ACF Plugin Support
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
} 


/*for set featured image*/

add_theme_support( 'post-thumbnails' );