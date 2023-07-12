<?php

/**
 * The template for displaying all single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

get_header();
if (have_posts()) : while (have_posts()) : the_post();
        // Get the post categories
        $categories = get_the_category();
?>
        <main class="single_post">
            <div class="container">
                <?php
                // If the post has categories assigned to it
                if (!empty($categories)) :
                    // Get the first category
                    $category = $categories[0];
                    // Get the category name
                    $category_name = $category->name;
                    // Get the category slug
                    $category_slug = $category->slug;
                    if ($category_slug !== 'nezarazene') :
                ?>
                        <h3><?php echo $category_name; ?></h3>
                <?php endif;
                endif; ?>
                <h1><?php the_title(); ?></h1>
                <p class="info"><?php echo get_the_date(); ?> &ndash; <?php echo get_the_author(); ?></p>
                <article>
                    <?php the_content(); ?>
                </article>
            </div>
        </main>
<?php
    endwhile;
endif;
get_footer();
?>