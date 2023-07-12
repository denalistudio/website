<?php

/**
 * Template for displaying home page.
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

get_header();
if (have_posts()) : ?>
    <div class="container">
        <h1 class="page_title">Přečtěte si více <br>o tom <span class="gradient">co děláme</span></h1>
        <div class="posts">
            <?php
            while (have_posts()) : the_post();
                // Get the post categories
                $categories = get_the_category();
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
                        <a href="<?php the_permalink(); ?>" class="post" data-slug="<?php echo $category_slug; ?>" data-visible="true">
                            <h4><?php echo $category_name; ?></h4>
                            <h2><?php the_title(); ?></h2>
                            <p class="info"><?php echo get_the_date(); ?> &ndash; <?php echo get_the_author(); ?></p>
                            <div class="excerpt"><?php the_excerpt(); ?></div>
                        </a>
                    <?php else : ?>
                        <a href="<?php the_permalink(); ?>" class="post" data-visible="true">
                            <h2><?php the_title(); ?></h2>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php
endif;
get_footer();
?>