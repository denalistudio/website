<div class="container">
    <header id="header-desktop">
        <a href="<?php echo home_url(); ?>" id="logo">Denali studio</a>
        <nav>
            <?php if (is_front_page()) : ?>
                <div class="anchor" data-link="sluzby">Služby</div>
                <div class="anchor" data-link="projekty">Projekty</div>
                <a href="<?php echo home_url('blog'); ?>" class="link">Blog</a>
                <a href="<?php echo home_url('kontakt'); ?>" class="btn btn-black">Kontaktujte nás</a>
            <?php else : ?>
                <a href="<?php echo home_url(); ?>#sluzby" class="link">Služby</a>
                <a href="<?php echo home_url(); ?>#projekty" class="link">Projekty</a>
                <a href="<?php echo home_url('blog'); ?>" class="link">Blog</a>
                <a href="<?php echo home_url('kontakt'); ?>" class="btn btn-black">Kontaktujte nás</a>
            <?php endif; ?>
        </nav>
    </header>
</div>