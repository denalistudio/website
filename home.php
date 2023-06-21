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
        <h1 class="page_title">Read more about <br><span class="gradient">what we do</span></h1>
        <div class="posts">
            <?php
            while (have_posts()) : the_post();
                // Get the post categories
                $categories = get_the_category();
            ?>
                <a href="<?php the_permalink(); ?>" class="post">
                    <figure class="thumbnail"></figure>
                    <?php
                    // If the post has categories assigned to it
                    if (!empty($categories)) :
                        // Get the first category
                        $category = $categories[0];
                        // Get the category name
                        $category_name = $category->name;
                    ?>
                        <h4><?php echo $category_name; ?></h4>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
<?php
endif;
get_footer();
?>