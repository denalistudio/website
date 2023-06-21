<?php

/**
 * The template for displaying all single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package Veronika Zvonečková
 * @since Veronika Zvonečková 1.0
 */

get_header();
if (have_posts()) : while (have_posts()) : the_post();
        // Get the post categories
        $categories = get_the_category();
?>
        <figure class="thumbnail">
        </figure>
        <div class="container">
            <?php
            // If the post has categories assigned to it
            if (!empty($categories)) :
                // Get the first category
                $category = $categories[0];
                // Get the category name
                $category_name = $category->name;
            ?>
                <h3><?php echo $category_name; ?></h3>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <article>
                <?php the_content(); ?>
            </article>
        </div>
<?php
    endwhile;
endif;
get_footer();
?>