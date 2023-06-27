<?php

/**
 * The front page template file
 * 
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

get_header();
?>
<div class="container">
    <h1 class="page_title">We help companies thrive <br>in our <span class="gradient">ever-changing world</span></h1>
</div>
<figure id="hero_image">
    <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero.webp" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" type="image/png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="">
    </picture>
</figure>
<div class="container">
    <p class="hero_text">We are a multidisiplinary digital agency that helps companies succeed by crafting brands that last, creating
        experiences that impress and stories that inspire.</p>
</div>

<div class="services" data-anchor="sluzby">
    <div class="marquee-wrapper">
        <div id="marquee-1" class="marquee">
            <div class="marquee-group">
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div aria-hidden="true" class="marquee-group">
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div id="marquee-2" class="marquee">
            <div class="marquee-group">
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div aria-hidden="true" class="marquee-group">
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
                <div class="item">
                    <h3>Webové stránky</h3>
                    <p>Lorem ipsum dolor sit amet, lorem ipsum dolor, lorem ipsum, sit amet lorem.</p>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M352 256c0 22.1-2.2 43.5-6.1 64H166.1c-3.9-20.5-6.1-41.9-6.1-64s2.2-43.5 6.1-64H345.9c3.9 20.5 6.1 41.9 6.1 64zm26.4-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H378.4c3.6-20.5 5.6-41.9 5.6-64s-2-43.5-5.6-64zm115-32h-122c-17-65.6-48.3-120-74-156.7c89.2 14.5 163 75.2 196 156.7zm-155.1 0H173.7c11.4-40.2 28.4-75.9 45.8-105.4c13-21.9 25.9-40 36.5-53.5c10.5 13.5 23.5 31.6 36.5 53.5c17.4 29.4 34.5 65.1 45.8 105.4zm-197.7 0H18.6c33-81.5 106.7-142.2 196-156.7c-25.7 36.7-57 91-74 156.7zM8.1 192H133.6c-3.6 20.5-5.6 41.9-5.6 64s2 43.5 5.6 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM173.7 352H338.3c-11.4 40.2-28.4 75.9-45.8 105.4c-13 21.9-25.9 40-36.5 53.5c-10.5-13.5-23.5-31.6-36.5-53.5c-17.4-29.4-34.5-65.1-45.8-105.4zm-33.2 0c17 65.6 48.3 120 74 156.7c-89.2-14.5-163-75.2-196-156.7h122zm352.8 0c-33 81.5-106.7 142.2-196 156.7c25.7-36.7 57-91 74-156.7h122z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact">
    <canvas id="contact_bg"></canvas>
    <div class="container">
        <div class="content">
            <h2>Are you ready?</h2>
            <a href="<?php echo home_url('kontakt'); ?>" class="contact_btn">
                <svg width="auto" height="100%" viewBox="0 0 566 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M75 0C33.5786 0 0 33.5786 0 75C0 116.421 33.5786 150 75 150H491C532.421 150 566 116.421 566 75C566 33.5786 532.421 0 491 0H75ZM103.064 76.736L116.84 92H122.552L107.24 75.296L122.408 58.544H116.888L103.064 74.048V58.544H98.696V92H103.064V76.736ZM132.182 90.752C134.198 91.872 136.438 92.432 138.902 92.432C141.398 92.432 143.67 91.872 145.718 90.752C147.766 89.632 149.382 88.048 150.566 86C151.782 83.92 152.39 81.52 152.39 78.8C152.39 76.08 151.798 73.696 150.614 71.648C149.462 69.6 147.878 68.032 145.862 66.944C143.846 65.824 141.59 65.264 139.094 65.264C136.598 65.264 134.342 65.824 132.326 66.944C130.31 68.032 128.71 69.616 127.526 71.696C126.374 73.744 125.798 76.112 125.798 78.8C125.798 81.52 126.358 83.92 127.478 86C128.63 88.048 130.198 89.632 132.182 90.752ZM143.318 87.488C141.942 88.224 140.47 88.592 138.902 88.592C137.334 88.592 135.894 88.24 134.582 87.536C133.27 86.8 132.214 85.696 131.414 84.224C130.646 82.752 130.262 80.944 130.262 78.8C130.262 76.688 130.662 74.896 131.462 73.424C132.262 71.952 133.318 70.864 134.63 70.16C135.974 69.424 137.446 69.056 139.046 69.056C140.614 69.056 142.07 69.424 143.414 70.16C144.758 70.864 145.846 71.952 146.678 73.424C147.51 74.896 147.926 76.688 147.926 78.8C147.926 80.912 147.494 82.704 146.63 84.176C145.798 85.648 144.694 86.752 143.318 87.488ZM178.725 68.144C176.742 66.192 174.15 65.216 170.949 65.216C169.158 65.216 167.51 65.584 166.005 66.32C164.533 67.056 163.365 68.096 162.501 69.44V65.696H158.133V92H162.501V77.456C162.501 74.704 163.174 72.608 164.518 71.168C165.893 69.728 167.734 69.008 170.038 69.008C172.309 69.008 174.102 69.712 175.413 71.12C176.725 72.496 177.382 74.496 177.382 77.12V92H181.702V76.496C181.702 72.848 180.71 70.064 178.725 68.144ZM194.165 84.8V69.296H201.029V65.696H194.165V59.072H189.797V65.696H186.389V69.296H189.797V84.8C189.797 87.36 190.405 89.2 191.621 90.32C192.837 91.44 194.661 92 197.093 92H201.029V88.304H197.813C196.469 88.304 195.525 88.048 194.981 87.536C194.437 86.992 194.165 86.08 194.165 84.8ZM206.321 71.696C205.233 73.712 204.689 76.064 204.689 78.752C204.689 81.408 205.233 83.776 206.321 85.856C207.409 87.936 208.897 89.552 210.785 90.704C212.673 91.856 214.785 92.432 217.121 92.432C219.393 92.432 221.377 91.936 223.073 90.944C224.801 89.92 226.097 88.64 226.961 87.104V92H231.377V65.696H226.961V70.496C226.129 68.992 224.865 67.744 223.169 66.752C221.473 65.76 219.473 65.264 217.169 65.264C214.833 65.264 212.705 65.824 210.785 66.944C208.897 68.064 207.409 69.648 206.321 71.696ZM225.761 73.616C226.561 75.088 226.961 76.816 226.961 78.8C226.961 80.784 226.561 82.528 225.761 84.032C224.961 85.504 223.873 86.64 222.497 87.44C221.153 88.208 219.665 88.592 218.033 88.592C216.401 88.592 214.913 88.208 213.569 87.44C212.225 86.64 211.153 85.504 210.353 84.032C209.553 82.528 209.153 80.768 209.153 78.752C209.153 76.768 209.553 75.04 210.353 73.568C211.153 72.096 212.225 70.976 213.569 70.208C214.913 69.44 216.401 69.056 218.033 69.056C219.665 69.056 221.153 69.456 222.497 70.256C223.873 71.024 224.961 72.144 225.761 73.616ZM243.126 80.384L253.447 92H259.398L246.967 78.8L259.35 65.696H253.255L243.126 77.36V56.48H238.758V92H243.126V80.384ZM268.79 84.8V69.296H275.654V65.696H268.79V59.072H264.422V65.696H261.014V69.296H264.422V84.8C264.422 87.36 265.03 89.2 266.246 90.32C267.462 91.44 269.286 92 271.718 92H275.654V88.304H272.438C271.094 88.304 270.15 88.048 269.606 87.536C269.062 86.992 268.79 86.08 268.79 84.8ZM304.274 92V65.696H299.906V80.144C299.906 82.896 299.234 84.992 297.89 86.432C296.546 87.872 294.706 88.592 292.37 88.592C290.098 88.592 288.306 87.904 286.994 86.528C285.682 85.12 285.026 83.12 285.026 80.528V65.696H280.706V81.104C280.706 83.536 281.17 85.6 282.098 87.296C283.058 88.992 284.354 90.272 285.986 91.136C287.618 91.968 289.458 92.384 291.506 92.384C293.298 92.384 294.93 92.016 296.402 91.28C297.906 90.512 299.074 89.456 299.906 88.112V92H304.274ZM311.889 60.56C312.465 61.136 313.169 61.424 314.001 61.424C314.833 61.424 315.521 61.136 316.065 60.56C316.641 59.984 316.929 59.28 316.929 58.448C316.929 57.616 316.641 56.912 316.065 56.336C315.521 55.76 314.833 55.472 314.001 55.472C313.169 55.472 312.465 55.76 311.889 56.336C311.345 56.912 311.073 57.616 311.073 58.448C311.073 59.28 311.345 59.984 311.889 60.56ZM314.385 102.848C315.569 101.76 316.161 100.048 316.161 97.712V65.696H311.793V97.616C311.793 98.768 311.537 99.584 311.025 100.064C310.545 100.544 309.697 100.784 308.481 100.784H306.657V104.48H309.201C311.473 104.48 313.201 103.936 314.385 102.848ZM328.883 84.8V69.296H335.747V65.696H328.883V59.072H324.515V65.696H321.107V69.296H324.515V84.8C324.515 87.36 325.123 89.2 326.339 90.32C327.555 91.44 329.379 92 331.811 92H335.747V88.304H332.531C331.187 88.304 330.243 88.048 329.699 87.536C329.155 86.992 328.883 86.08 328.883 84.8ZM364.896 80.48C364.992 79.552 365.04 78.672 365.04 77.84C365.04 75.44 364.512 73.296 363.456 71.408C362.432 69.488 360.96 67.984 359.04 66.896C357.12 65.808 354.912 65.264 352.416 65.264C349.856 65.264 347.584 65.824 345.6 66.944C343.648 68.032 342.128 69.6 341.04 71.648C339.952 73.696 339.408 76.08 339.408 78.8C339.408 81.52 339.968 83.92 341.088 86C342.208 88.048 343.744 89.632 345.696 90.752C347.68 91.872 349.92 92.432 352.416 92.432C355.552 92.432 358.176 91.648 360.288 90.08C362.4 88.48 363.808 86.416 364.512 83.888H359.808C359.296 85.36 358.4 86.544 357.12 87.44C355.872 88.304 354.304 88.736 352.416 88.736C350.112 88.736 348.144 88.016 346.512 86.576C344.912 85.104 344.032 83.072 343.872 80.48H364.896ZM359.424 72.656C360.16 73.84 360.528 75.264 360.528 76.928H343.92C344.144 74.432 345.024 72.48 346.56 71.072C348.128 69.664 350.016 68.96 352.224 68.96C353.76 68.96 355.152 69.28 356.4 69.92C357.68 70.528 358.688 71.44 359.424 72.656ZM404.194 68.144C402.21 66.192 399.618 65.216 396.418 65.216C394.626 65.216 392.978 65.584 391.474 66.32C390.002 67.056 388.834 68.096 387.97 69.44V65.696H383.602V92H387.97V77.456C387.97 74.704 388.642 72.608 389.986 71.168C391.362 69.728 393.202 69.008 395.506 69.008C397.778 69.008 399.57 69.712 400.882 71.12C402.194 72.496 402.85 74.496 402.85 77.12V92H407.17V76.496C407.17 72.848 406.178 70.064 404.194 68.144ZM414.305 71.696C413.217 73.712 412.673 76.064 412.673 78.752C412.673 81.408 413.217 83.776 414.305 85.856C415.393 87.936 416.881 89.552 418.769 90.704C420.657 91.856 422.769 92.432 425.105 92.432C427.377 92.432 429.361 91.936 431.057 90.944C432.785 89.92 434.081 88.64 434.945 87.104V92H439.361V65.696H434.945V70.496C434.113 68.992 432.849 67.744 431.153 66.752C429.457 65.76 427.457 65.264 425.153 65.264C422.817 65.264 420.689 65.824 418.769 66.944C416.881 68.064 415.393 69.648 414.305 71.696ZM433.745 73.616C434.545 75.088 434.945 76.816 434.945 78.8C434.945 80.784 434.545 82.528 433.745 84.032C432.945 85.504 431.857 86.64 430.481 87.44C429.137 88.208 427.649 88.592 426.017 88.592C424.385 88.592 422.897 88.208 421.553 87.44C420.209 86.64 419.137 85.504 418.337 84.032C417.537 82.528 417.137 80.768 417.137 78.752C417.137 76.768 417.537 75.04 418.337 73.568C419.137 72.096 420.209 70.976 421.553 70.208C422.897 69.44 424.385 69.056 426.017 69.056C427.649 69.056 429.137 69.456 430.481 70.256C431.857 71.024 432.945 72.144 433.745 73.616ZM421.313 63.728L431.537 58.256V54.464L421.313 60.464V63.728ZM450.631 91.424C452.231 92.096 454.039 92.432 456.055 92.432C457.943 92.432 459.607 92.112 461.047 91.472C462.519 90.8 463.655 89.888 464.455 88.736C465.255 87.584 465.655 86.288 465.655 84.848C465.623 83.248 465.175 81.952 464.311 80.96C463.479 79.968 462.471 79.232 461.287 78.752C460.103 78.24 458.567 77.728 456.679 77.216C455.175 76.8 453.991 76.432 453.127 76.112C452.295 75.76 451.591 75.312 451.015 74.768C450.471 74.192 450.199 73.472 450.199 72.608C450.199 71.52 450.663 70.64 451.591 69.968C452.519 69.296 453.767 68.96 455.335 68.96C457.031 68.96 458.375 69.376 459.367 70.208C460.391 71.04 460.951 72.144 461.047 73.52H465.415C465.287 70.96 464.327 68.944 462.535 67.472C460.743 66 458.391 65.264 455.479 65.264C453.591 65.264 451.911 65.6 450.439 66.272C448.967 66.912 447.831 67.792 447.031 68.912C446.231 70.032 445.831 71.264 445.831 72.608C445.831 74.304 446.263 75.68 447.127 76.736C448.023 77.76 449.079 78.544 450.295 79.088C451.543 79.6 453.143 80.112 455.095 80.624C457.239 81.168 458.823 81.728 459.847 82.304C460.871 82.848 461.383 83.696 461.383 84.848C461.383 85.968 460.903 86.896 459.943 87.632C458.983 88.368 457.671 88.736 456.007 88.736C454.215 88.736 452.759 88.32 451.639 87.488C450.551 86.656 449.943 85.584 449.815 84.272H445.303C445.399 85.872 445.911 87.296 446.839 88.544C447.767 89.76 449.031 90.72 450.631 91.424Z" fill="white" />
                </svg>
            </a>
        </div>
    </div>
</div>
<?php get_footer(); ?>