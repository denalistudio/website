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
        <div class="filters">
            <div id="all_posts" data-active="true">Všechno</div>
            <?php
            // Get all the categories
            $categories = get_categories();
            // Check if every category has a post
            foreach ($categories as $category) :
                // Get the category name
                $category_name = $category->name;
                // Get the category slug
                $category_slug = $category->slug;
                // Get the category post count
                $category_count = $category->count;
                // If the category has posts
                if ($category_count > 0 && $category_slug !== 'nezarazene') :
            ?>
                    <div class="category" data-slug="<?php echo $category_slug; ?>" data-active="false"><?php echo $category_name; ?></div>
            <?php endif;
            endforeach; ?>
        </div>
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
                            <figure class="thumbnail"></figure>
                            <h4><?php echo $category_name; ?></h4>
                            <h2><?php the_title(); ?></h2>
                        </a>
                    <?php else : ?>
                        <a href="<?php the_permalink(); ?>" class="post" data-visible="true">
                            <figure class="thumbnail"></figure>
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