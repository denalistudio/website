<?php

/**
 * The template for 404 page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

get_header();
?>

<main class="page_404">
    <div class="container">
        <h1>Tady bohužel nic nenajdete.</h1>
        <p>Podívejte se na naši <a href="<?php echo home_url(); ?>">hlavní stránku</a> a zjistěte více o tom, co děláme.</p>
    </div>
</main>

<?php get_footer(); ?>