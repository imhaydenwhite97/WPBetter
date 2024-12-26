<?php
function your_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));
}
add_action('after_setup_theme', 'your_theme_setup');

function your_theme_scripts() {
    wp_enqueue_style('your-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'your_theme_scripts');


function wpbetter_custom_header_styles() {
    wp_enqueue_style('wpbetter-custom-header', get_template_directory_uri() . '/assets/css/custom-header.css');
}
add_action('wp_enqueue_scripts', 'wpbetter_custom_header_styles');


add_filter('show_admin_bar', '__return_false');


function wpbetter_front_page_styles() {
    if (is_front_page()) {
        wp_enqueue_style('wpbetter-front-page', get_template_directory_uri() . '/assets/css/front-page.css');
    }
}
add_action('wp_enqueue_scripts', 'wpbetter_front_page_styles');


function wpbetter_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'wpbetter_custom_logo_setup');
