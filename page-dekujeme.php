<?php

/**
 * The template for displaying 'dekujeme' page
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

get_header();
?>
<main class="thank_you">
    <div class="container">
        <h1>Vaše poptávka byla <span class="gradient">odeslána!</span></h1>
        <p>Více informací najdete v e-mailu. Pro jistotu si zkontrolujte i složku se spamem.</p>
        <div class="btn"><a href="<?php echo home_url(); ?>" class="btn-black">Zpět na hlavní stránku</a></div>
        <?php
        $posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC'
        ));
        if ($posts->have_posts()) :
        ?>
            <p>Pro zkrácení Vašeho čekání si můžete přečíst naše články z blogu.</p>
            <h2>Poslední článek z blogu</h2>
            <?php
            while ($posts->have_posts()) : $posts->the_post();
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
                            <h3><?php the_title(); ?></h3>
                            <p class="info"><?php echo get_the_date(); ?> &ndash; <?php echo get_the_author(); ?></p>
                            <div style="display: flex; justify-content: center;">
                                <div class="btn btn-black">Přečíst článek</div>
                            </div>
                        </a>
                    <?php else : ?>
                        <a href="<?php the_permalink(); ?>" class="post" data-visible="true">
                            <h3><?php the_title(); ?></h3>
                            <p class="info"><?php echo get_the_date(); ?> &ndash; <?php echo get_the_author(); ?></p>
                            <div style="display: flex; justify-content: center;">
                                <div class="btn btn-black">Přečíst článek</div>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>