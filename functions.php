<?php
// Theme setup
function xiv_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
}
add_action('after_setup_theme', 'xiv_theme_setup');

// Enqueue styles and scripts
function xiv_enqueue_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'xiv_enqueue_assets');
?>
