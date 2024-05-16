<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );





// Add custom block above shipping details on cart page
function custom_block_above_shipping_details() {
    // our custom block content
    echo '<div class="custom-block"><h6 style="text-align:center;">our custom content here</h6></div>';
}
add_action( 'woocommerce_before_cart_table', 'custom_block_above_shipping_details' );


//action using 
//only addition content add home page footer bottom
function my_custom_content_function() {
    // Your content goes here
    echo "<div style='text-align:center;'>This is my custom content!</div>";
}
add_action('my_custom_homepage_content', 'my_custom_content_function');

// Hook the custom content function to be displayed only on the homepage
function display_custom_content_on_homepage() {
    if (is_front_page()) { // Changed to is_front_page()
        do_action('my_custom_homepage_content');
    }
}
add_action('wp_footer', 'display_custom_content_on_homepage');