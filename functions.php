<?php

// Load stylesheets
function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.min.css', array(), false, 'all');
    wp_register_style('front_page', get_template_directory_uri() . '/assets/css/front-page.min.css', array(), false, 'all');
    wp_register_style('home', get_template_directory_uri() . '/assets/css/home.min.css', array(), false, 'all');
    wp_register_style('single_post', get_template_directory_uri() . '/assets/css/single-post.min.css', array(), false, 'all');
    wp_register_style('stylesheet_404', get_template_directory_uri() . '/assets/css/404.min.css', array(), false, 'all');

    wp_enqueue_style('main');

    if (is_front_page()) {
        wp_enqueue_style('front_page');
    }

    if (is_home()) {
        wp_enqueue_style('home');
    }

    if (is_single()) {
        wp_enqueue_style('single_post');
    }

    if (is_404()) {
        wp_enqueue_style('stylesheet_404');
    }
}
add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript files
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.min.js', 'jquery', false, true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('post-thumbnails');
add_theme_support('title-tag');