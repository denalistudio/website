<?php

/**
 * The front page template file
 * 
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

get_header();
?>
<div class="container">
    <h1 class="page_title">
        <div class="row_1">We help companies thrive</div>
        <div class="row_2">in our</div>
        <div class="gradient">
            <canvas id="page_title_canvas"></canvas>
            <span id="page_title_mask" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/page-title-mask.svg)">ever-changing world</span>
        </div>
    </h1>
    <figure class="hero">
        <picture>
            <source srcset="./images/hero.webp" type="image/webp">
            <source srcset="./images/hero.png" type="image/png">
            <img src="./images/hero.png" alt="">
        </picture>
    </figure>
    <p>We are a multidisiplinary digital agency that helps companies succeed by crafting brands that last, creating
        experiences that impress and stories that inspire.</p>
</div>
<div class="contact" data-anchor="contact">
    <div class="container">
        <div>
            <h2>Are you ready?</h2>
            <div class="white_btn">Contact Us</div>
        </div>
    </div>
</div>
<?php get_footer(); ?>