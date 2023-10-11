<?php

// Load stylesheets
function load_css()
{
    wp_register_style('mousefollower', 'https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css', array(), false, 'all');
    wp_register_style('cookieconsent', 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.9.1/dist/cookieconsent.css', array(), false, 'all');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.min.css', array(), false, 'all');
    wp_register_style('front_page', get_template_directory_uri() . '/assets/css/front-page.min.css', array(), false, 'all');
    wp_register_style('home', get_template_directory_uri() . '/assets/css/home.min.css', array(), false, 'all');
    wp_register_style('single_post', get_template_directory_uri() . '/assets/css/single-post.min.css', array(), false, 'all');
    wp_register_style('stylesheet_404', get_template_directory_uri() . '/assets/css/404.min.css', array(), false, 'all');
    wp_register_style('contact', get_template_directory_uri() . '/assets/css/page-kontakt.min.css', array(), false, 'all');
    wp_register_style('thank_you', get_template_directory_uri() . '/assets/css/page-dekujeme.min.css', array(), false, 'all');
    wp_register_style('email_confirmation', get_template_directory_uri() . '/assets/css/page-overeno.min.css', array(), false, 'all');

    wp_enqueue_style('mousefollower');
    wp_enqueue_style('cookieconsent');
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

    if (is_page('kontakt')) {
        wp_enqueue_style('contact');
    }

    if (is_page('dekujeme')) {
        wp_enqueue_style('thank_you');
    }

    if (is_page('overeno')) {
        wp_enqueue_style('email_confirmation');
    }
}
add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript files
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', '', false, true);
    wp_register_script('mousefollower', 'https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js', '', false, true);
    wp_register_script('cookieconsent', 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.9.1/dist/cookieconsent.js', '', false, true);
    wp_register_script('cookieconsent_init', get_template_directory_uri() . '/assets/js/cookieconsent-init.js', 'cookieconsent', false, true);
    wp_register_script('granimjs', get_template_directory_uri() . '/assets/js/granim.min.js', '', false, true);

    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', '', true, true);
    wp_register_script('front_page', get_template_directory_uri() . '/assets/js/front-page.js', '', true, true);
    wp_register_script('posts_filtering', get_template_directory_uri() . '/assets/js/posts-filtering.js', '', true, true);
    wp_register_script('post_progress_bar', get_template_directory_uri() . '/assets/js/post-progress-bar.js', '', true, true);
    wp_register_script('contact_form', get_template_directory_uri() . '/assets/js/contact-form.js', '', true, true);
   
    wp_enqueue_script('gsap');
    wp_enqueue_script('mousefollower');
    wp_enqueue_script('cookieconsent');
    wp_enqueue_script('cookieconsent_init');
    wp_enqueue_script('granimjs');
    wp_enqueue_script('main');

    if (is_front_page()) {
        wp_enqueue_script('front_page');
    }

    if (is_home()) {
        wp_enqueue_script('posts_filtering');
    }

    if (is_single()) {
        wp_enqueue_script('post_progress_bar');
    }

    if (is_page('kontakt')) {
        wp_enqueue_script('contact_form');
    }
}
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// Menus
register_nav_menus(
    array(
        'social' => 'Sociální sítě',
        'popular_on_blog' => 'Populární na blogu'
    )
);

// Custom post type
add_action('init', 'custom_post_type');
function custom_post_type() {
    register_post_type('partner', array(
        'labels' => array(
            'name' => _x('Partneři', 'post type general name'),
            'singular_name' => _x('Partner', 'post type singular name'),
            'add_new' => __('Přidat nového'),
            'add_new_item' => __('Přidat nového partner'),
            'edit_item' => __('Upravit partnera'),
            'new_item' => __('Nový partner'),
            'all_items' => __('Všichni partneři'),
            'view_item' => __('Zobrazit partnera'),
            'search_items' => __('Hledat partnery'),
            'not_found' => __('Žádní partneři nenalezeny'),
            'not_found_in_trash' => __('Žádní partneři v koši nenalezeni'),
            'parent_item_colon' => '',
            'menu_name' => 'Partneři'
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'partner'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'menu_position' => 5,
    ));

    register_post_type('press_release', array(
        'labels' => array(
            'name' => _x('Tiskové zprávy', 'post type general name'),
            'singular_name' => _x('Tisková zpráva', 'post type singular name'),
            'add_new' => __('Přidat novou'),
            'add_new_item' => __('Přidat novou tiskovou zprávu'),
            'edit_item' => __('Upravit tiskovou zprávu'),
            'new_item' => __('Nová tisková zpráva'),
            'all_items' => __('Všechny tiskové zprávy'),
            'view_item' => __('Zobrazit tiskovou zprávu'),
            'search_items' => __('Hledat tiskové zprávy'),
            'not_found' => __('Žádné tiskové zprávy nenalezeny'),
            'not_found_in_trash' => __('Žádné tiskové zprávy nenalezeny v koši'),
            'parent_item_colon' => '',
            'menu_name' => 'Tiskové zprávy'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'tiskova-zprava'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 6,
    ));
}