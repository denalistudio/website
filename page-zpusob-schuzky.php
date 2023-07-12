<?php

/**
 * The template for displaying 'dekujeme' page
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

if (isset($_GET['meeting']) && ($_GET['meeting'] == 'in-person' || $_GET['meeting'] == 'online')) {
    $meeting_type = $_GET['meeting'];
} else {
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    nocache_headers();
    require get_404_template();
    exit;
}

get_header();
?>
<main class="meeting_type">
    <div class="container">
        <?php
        if ($meeting_type == 'in-person') : ?>
            <h1>Děkujeme, že jste nám upřesnili, že preferujete <span class="gradient">prezenční</span> schůzku.</h1>
        <?php elseif ($meeting_type == 'online') : ?>
            <h1>Děkujeme, že jste nám upřesnili, že preferujete <span class="gradient">online</span> schůzku.</h1>
        <?php endif; ?>
        <p>Budeme Vás kontaktovat, abychom se dohodli na termínu a podrobnostech.</p>
    </div>
</main>
<?php get_footer(); ?>