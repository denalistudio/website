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
        <div class="row"></div>
        <div class="row">
            <p id="copyright">Copyright <span id="copyright_year"></span> Jakub Klapka, všechna práva vyhrazena</p>
            <a href="javascript:void(0)" id="terms_and_conditions">Terms and conditions</a>
            <a href="javascript:void(0)" id="privacy_policy">Privacy policy</a>
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