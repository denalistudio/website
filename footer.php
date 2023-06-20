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
            element: '#page_title_canvas',
            direction: 'left-right',
            states: {
                "default-state": {
                    gradients: [
                        ['#EB3349', '#F45C43'],
                        ['#FF8008', '#FFC837'],
                        ['#4CB8C4', '#3CD3AD'],
                        ['#24C6DC', '#514A9D'],
                        ['#FF512F', '#DD2476'],
                        ['#DA22FF', '#9733EE']
                    ],
                    transitionSpeed: 2000
                }
            }
        });
    </script>
<?php endif; ?>

</body>

</html>