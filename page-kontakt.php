<?php

/**
 * Custom template for the contact page
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

get_header();
if (have_posts()) :
?>
    <div class="container">
        <main class="contact_page">
            <h1 class="page_title"><span class="gradient">Dobrý den,</span> <br>řekněte nám něco o sobě</h1>
            <div class="contact_form">
                <section>
                    <p>Všechna pole v tomto formuláři jsou povinná.</p>
                </section>
                <section class="section-services">
                    <p>Mám zájem o:</p>
                    <div class="services">
                        <div class="service" data-selected="false" data-slug="webove-stranky"><span>Webové stránky</span></div>
                        <div class="service" data-selected="false" data-slug="eshop"><span>E-shop</span></div>
                        <div class="service" data-selected="false" data-slug="branding"><span>Branding</span></div>
                        <div class="service" data-selected="false" data-slug="marketing"><span>Marketing</span></div>
                        <div class="service" data-selected="false" data-slug="grafika"><span>Grafiku</span></div>
                        <div class="service" data-selected="false" data-slug="socialni-site"><span>Sociální sítě</span></div>
                    </div>
                    <p id="services_error" class="hidden">Musíte vybrat alespoň jednu možnost.</p>
                </section>
                <section>
                    <p class="margin two_fields">Jmenuji se <input type="text" name="first_name" id="first_name" placeholder="jméno"><input type="text" name="last_name" id="last_name" placeholder="příjmení"></p>
                    <p class="margin one_field">a zastupuji <input type="text" name="company" id="company" placeholder="název firmy nebo obchodní jméno"></p>
                    <p class="margin one_field">Můžete mě zastihnout na e-mailové adrese <input type="email" name="email" id="email" placeholder="vaše e-mailová adresa"></p>
                </section>
                <section>
                    <p>Popište nám, co pro Vás máme vytvořit:</p>
                    <div id="message_wrapper">
                        <textarea name="message" id="message" cols="50" rows="5"></textarea>
                    </div>
                </section>
                <section class="consent_checkbox">
                    <div class="checkbox">
                        <input type="checkbox" name="consent" id="consent">
                        <div class="checkbox_validation"></div>
                    </div>
                    <label for="consent">Souhlasím se zasíláním organizačních a informačních e-mailů ohledně Vaší poptávky.</label>
                </section>
                <button id="contact_form__btn" class="btn-black" onclick="sendForm();">Odeslat</button>
            </div>
        </main>
    </div>
<?php
endif;
get_footer();
?>