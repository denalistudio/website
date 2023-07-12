<div class="container">
    <header id="header-mobile">
        <a href="<?php echo home_url(); ?>" id="logo">Denali studio</a>
        <div id="menu_open_btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z" />
            </svg>
        </div>
    </header>
</div>
<canvas id="header_slide"></canvas>
<div id="header_menu">
    <div class="container">
        <header>
            <a href="<?php echo home_url(); ?>" id="logo">Denali studio</a>
            <div id="menu_close_btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z" />
                </svg>
            </div>
        </header>
        <ul>
            <?php if (is_front_page()) : ?>
                <li data-link="projekty">Projekty</li>
            <?php else : ?>
                <li><a href="<?php echo home_url(); ?>#projekty">Projekty</a></li>
            <?php endif; ?>
            <li><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
            <li class="btn"><a href="<?php echo home_url('kontakt'); ?>" class="btn btn-black">Kontaktujte nás</a></li>
        </ul>
        <nav class="socials">
            <a href="https://www.facebook.com/denali.studio" target="_blank" rel="noopener" class="facebook">
                <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <path d="M1024,512c0,-282.77 -229.23,-512 -512,-512c-282.77,0 -512,229.23 -512,512c0,255.554 187.231,467.37 432,505.78l0,-357.78l-130,0l0,-148l130,0l0,-112.8c0,-128.32 76.438,-199.2 193.39,-199.2c56.017,0 114.61,10 114.61,10l0,126l-64.562,0c-63.603,0 -83.438,39.467 -83.438,79.957l0,96.043l142,0l-22.7,148l-119.3,0l0,357.78c244.769,-38.41 432,-250.226 432,-505.78Z" style="fill:#030404;fill-rule:nonzero;" />
                    <path d="M711.3,660l22.7,-148l-142,0l-0,-96.043c-0,-40.49 19.835,-79.957 83.438,-79.957l64.562,0l-0,-126c-0,0 -58.593,-10 -114.61,-10c-116.952,0 -193.39,70.88 -193.39,199.2l-0,112.8l-130,0l-0,148l130,0l-0,357.78c26.067,4.09 52.784,6.22 80,6.22c27.216,0 53.933,-2.13 80,-6.22l-0,-357.78l119.3,0Z" style="fill:#fff;fill-rule:nonzero;" />
                </svg>
            </a>
            <a href="https://www.instagram.com/denali.studio/" target="_blank" rel="noopener" class="instagram">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                    <path d="M295.42,6c-53.2,2.51-89.53,11-121.29,23.48-32.87,12.81-60.73,30-88.45,57.82S40.89,143,28.17,175.92c-12.31,31.83-20.65,68.19-23,121.42S2.3,367.68,2.56,503.46,3.42,656.26,6,709.6c2.54,53.19,11,89.51,23.48,121.28,12.83,32.87,30,60.72,57.83,88.45S143,964.09,176,976.83c31.8,12.29,68.17,20.67,121.39,23s70.35,2.87,206.09,2.61,152.83-.86,206.16-3.39S799.1,988,830.88,975.58c32.87-12.86,60.74-30,88.45-57.84S964.1,862,976.81,829.06c12.32-31.8,20.69-68.17,23-121.35,2.33-53.37,2.88-70.41,2.62-206.17s-.87-152.78-3.4-206.1-11-89.53-23.47-121.32c-12.85-32.87-30-60.7-57.82-88.45S862,40.87,829.07,28.19c-31.82-12.31-68.17-20.7-121.39-23S637.33,2.3,501.54,2.56,348.75,3.4,295.42,6m5.84,903.88c-48.75-2.12-75.22-10.22-92.86-17-23.36-9-40-19.88-57.58-37.29s-28.38-34.11-37.5-57.42c-6.85-17.64-15.1-44.08-17.38-92.83-2.48-52.69-3-68.51-3.29-202s.22-149.29,2.53-202c2.08-48.71,10.23-75.21,17-92.84,9-23.39,19.84-40,37.29-57.57s34.1-28.39,57.43-37.51c17.62-6.88,44.06-15.06,92.79-17.38,52.73-2.5,68.53-3,202-3.29s149.31.21,202.06,2.53c48.71,2.12,75.22,10.19,92.83,17,23.37,9,40,19.81,57.57,37.29s28.4,34.07,37.52,57.45c6.89,17.57,15.07,44,17.37,92.76,2.51,52.73,3.08,68.54,3.32,202s-.23,149.31-2.54,202c-2.13,48.75-10.21,75.23-17,92.89-9,23.35-19.85,40-37.31,57.56s-34.09,28.38-57.43,37.5c-17.6,6.87-44.07,15.07-92.76,17.39-52.73,2.48-68.53,3-202.05,3.29s-149.27-.25-202-2.53m407.6-674.61a60,60,0,1,0,59.88-60.1,60,60,0,0,0-59.88,60.1M245.77,503c.28,141.8,115.44,256.49,257.21,256.22S759.52,643.8,759.25,502,643.79,245.48,502,245.76,245.5,361.22,245.77,503m90.06-.18a166.67,166.67,0,1,1,167,166.34,166.65,166.65,0,0,1-167-166.34" transform="translate(-2.5 -2.5)" />
                </svg>
            </a>
            <a href="https://www.linkedin.com/company/studiodenali/" target="_blank" rel="noopener" class="linkedin">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.webp" type="image/webp">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" type="image/png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="">
                </picture>
            </a>
        </nav>
    </div>
</div>