<header id="header-desktop">
    <div class="container">
        <a href="<?php echo home_url(); ?>" id="logo">Denali studio</a>
        <nav>
            <?php if (is_front_page()) : ?>
                <div class="anchor" data-link="projekty" data-cursor="grow">Projekty</div>
                <a href="<?php echo home_url('blog'); ?>" class="link">Blog</a>
                <a href="https://forms.clickup.com/9010068483/f/8cgnf03-7435/DPB8AH6HSY55BBXDTU" target="_blank" rel="noopener" class="btn btn-black">Kontakt</a>
            <?php else : ?>
                <a href="<?php echo home_url(); ?>#projekty" class="link">Projekty</a>
                <a href="<?php echo home_url('blog'); ?>" class="link">Blog</a>
                <a href="https://forms.clickup.com/9010068483/f/8cgnf03-7435/DPB8AH6HSY55BBXDTU" target="_blank" rel="noopener" class="btn btn-black">Kontakt</a>
            <?php endif; ?>
        </nav>
    </div>
</header>