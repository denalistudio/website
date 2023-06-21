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
        <div class="row-1"></div>
        <div class="row-2">
            <p class="copyright">Copyright <span id="copyright_year"></span> Jakub Klapka, všechna práva vyhrazena</p>
            <div class="links">
                <a href="javascript:void(0)">Obchodní podmínky</a>
                <a href="javascript:void(0)">Zásady ochrany osobních údajů</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

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