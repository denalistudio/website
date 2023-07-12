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