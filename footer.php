<?php

/**
 * The template for displaying the footer
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */
?>
<footer>
    <div class="container">
        <div class="row-1">
            <div class="about_denali">
                <h2>Denali studio</h2>
                <p>&ndash; Challenging <br>conformity since <br>the year 2020</p>
            </div>
            <div class="sitemap">
                <h3>Sitemapa</h3>
                <ul>
                    <?php if (is_front_page()) : ?>
                        <li><span data-link="sluzby">Služby</span></li>
                        <li><span data-link="projekty">Projekty</span></li>
                    <?php else : ?>
                        <li><a href="<?php echo home_url(); ?>#sluzby"></a>Služby</li>
                        <li><a href="<?php echo home_url(); ?>#projekty"></a>Projekty</li>
                    <?php endif; ?>
                    <li><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
                    <li><a href="<?php echo home_url('kontakt'); ?>">Kontaktujte nás</a></li>
                </ul>
            </div>
            <div class="social">
                <h3>Socialní sítě</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'social',
                    'menu_class' => 'social'
                ));
                ?>
            </div>
            <div class="popular_on_blog">
                <h3>Populární na blogu</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'popular_on_blog',
                    'menu_class' => 'popular_on_blog'
                ));
                ?>
            </div>
        </div>
        <div class="row-2">
            <p class="copyright">Copyright &copy; <span id="copyright_year"></span> Jakub Klapka, všechna práva vyhrazena</p>
            <div class="links">
                <button type="button" data-cc="c-settings">Nastavení cookies</button>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- Google tag (gtag.js) -->
<script type="text/plain" data-cookiecategory="analytics" src="https://www.googletagmanager.com/gtag/js?id=G-LR5PJC47WC"></script>
<script type="text/plain" data-cookiecategory="analytics">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-LR5PJC47WC');
</script>

<?php if (is_front_page()) : ?>
    <script>
        var granimInstance = new Granim({
            element: '#contact_bg',
            direction: 'diagonal',
            isPausedWhenNotInView: true,
            states: {
                "default-state": {
                    gradients: [
                        ['#4A67E2', '#CFA2FF'],
                        ['#EED4FF', '#EE70FF'],
                        ['#4A67E2', '#D2D7FF']
                    ]
                }
            }
        });
    </script>
<?php endif; ?>

</body>

</html>