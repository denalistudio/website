<?php

/**
 * The template for displaying all pages
 * 
 * This is the default template for displaying pages.
 * Please note that other pages may use different templates.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

get_header();
if (have_posts()) : while (have_posts()) : the_post();
    endwhile;
endif;
get_footer();
