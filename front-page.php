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
    <h1 class="page_title">We help companies thrive <br>in our <span class="gradient">ever-changing world</span></h1>
    <figure class="hero_image">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero.webp" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" type="image/png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="">
        </picture>
    </figure>
    <p class="hero_text">We are a multidisiplinary digital agency that helps companies succeed by crafting brands that last, creating
        experiences that impress and stories that inspire.</p>
</div>
<div class="contact" data-anchor="contact">
    <canvas id="contact_bg"></canvas>
    <div class="container">
        <div class="content">
            <h2>Are you ready?</h2>
            <div class="white_btn">Contact Us</div>
        </div>
    </div>
</div>
<?php get_footer(); ?>