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
            <h1>Dobrý den, řekněte nám něco o sobě</h1>
            <div class="contact_form">
                <p>Jmenuji se <input type="text" name="first_name" id="first_name" placeholder="jméno"><input type="text" name="last_name" id="last_name" placeholder="příjmení"></p>
                <p>Můžete mě zastihnout na e-mailové adrese <input type="email" name="email" id="email" placeholder="vaše e-mailová adresa"></p>
                <div class="message">
                    <p>Co byste chtěli, abychom pro Vás vytvořili?</p>
                    <div id="message_wrapper">
                        <textarea name="message" id="message" cols="50" rows="10"></textarea>
                    </div>
                </div>
                <button class="btn-black" onclick="Make()">Odeslat</button>
            </div>
        </main>
    </div>
<?php
endif;
get_footer();
?>