<!DOCTYPE html>
<html lang="cs">

<head>
    <?php require_once 'head.php'; ?>
    <link rel="stylesheet" href="./css/index.min.css">
    <title>Denali studio</title>
</head>

<body>
    <header id="header-mobile">
        <div class="container">
            <a href="./" id="logo">Denali studio</a>
            <div id="menu_btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z" />
                </svg>
            </div>
        </div>
    </header>
    <nav id="mobile_menu">
        <ul>
            <li><a href="./sluzby">Služby</a></li>
            <li><span id="mobile_menu_anchor">Naše práce</span></li>
            <li><a href="https://forms.clickup.com/9010068483/f/8cgnf03-7435/DPB8AH6HSY55BBXDTU" target="_blank" rel="noopener">Kontakt</a></li>
        </ul>
    </nav>
    <header id="header-desktop">
        <div class="container">
            <a href="./" id="logo">Denali studio</a>
            <nav>
                <a href="./sluzby">Služby</a>
                <a href="#nase-prace">Naše práce</a>
                <a href="https://forms.clickup.com/9010068483/f/8cgnf03-7435/DPB8AH6HSY55BBXDTU" target="_blank" rel="noopener">Kontakt</a>
            </nav>
        </div>
    </header>
    <div id="header_space"></div>
    <div class="container">
        <div class="hero">
            <div class="col_one">
                <h1>Překračujeme <br>hranice očekávání</h1>
            </div>
            <div class="col_two">
                <p>Kombinujeme design, vývoj a lidi, abychom mohli tvořit komplexní řešení, která inspirují.</p>
                <div class="button"><a href="https://forms.clickup.com/9010068483/f/8cgnf03-7435/DPB8AH6HSY55BBXDTU" target="_blank" rel="noopener">Kontaktujte nás</a></div>
            </div>
        </div>
    </div>
    <div class="showreel">
        <video autoplay muted loop>
            <source src="./showreel.mov" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="about_us">
            <div class="col">
                <h2>Komplexní řešení na míru vašim potřebám</h2>
                <p>Díky naší široké škále služeb jsme schopni hledat přesahy a tvořit řešení na míru přesně.</p>
                </div>
            <ul>
                <li><a href="./sluzby#branding">Branding</a></li>
                <li><a href="./sluzby#webove-stranky">Webové stránky</a></li>
                <li><a href="./sluzby#e-shopy">E&dash;shopy</a></li>
                <li><a href="./sluzby#marketing">Marketing</a></li>
                <li><a href="./sluzby#rizeni-projektu">Řízení projektů</a></li>
            </ul>
        </div>
    </div>
    <div id="nase-prace" class="projects">
        <div id="alianas" class="project">
            <a href="https://alianas.cz/cz/" class="image" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/projects/alianas.webp" type="image/webp">
                    <source srcset="./images/projects/alianas.jpg" type="image/jpeg">
                    <img src="./images/projects/alianas.jpg" alt="Šperk od firmy Alianas">
                </picture>
            </a>
            <div class="meta">
                <h3>Alianas</h3>
                <p class="labels">Ecommerce &bull; Design</p>
            </div>
        </div>
        <div id="udime_doma" class="project">
            <figure class="image">
                <picture>
                    <source srcset="./images/projects/udime_doma.webp" type="image/webp">
                    <source srcset="./images/projects/udime_doma.jpg" type="image/jpeg">
                    <img src="./images/projects/udime_doma.jpg" alt="Web firmy Udíme doma na mobilním telefonu">
                </picture>
            </figure>
            <div class="meta">
                <h3>Udíme doma</h3>
                <p class="description">Inovativní e-commerce řešení a branding pro lídra na trhu s příslušenstvím pro udírny</p>
                <p class="labels">Branding &bull; Design &bull; Ecommerce</p>
            </div>
        </div>
        <div id="pps_kania" class="project fw-l">
            <a href="https://www.pps-kania.cz/" class="image" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/projects/pps_kania.webp" type="image/webp">
                    <source srcset="./images/projects/pps_kania.png" type="image/png">
                    <img src="./images/projects/pps_kania.png" alt="Snímek webu firmy PPS Kania">
                </picture>
            </a>
            <div class="meta">
                <h3>PPS Kania</h3>
                <p class="description">Moderní a elegantní webové stránky pro projekční firmu z Ostravy</p>
                <p class="labels">Webové stránky</p>
            </div>
        </div>
        <div id="abco" class="project fw-r">
            <a href="https://www.abco.cz/" class="image" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/projects/abco.webp" type="image/webp">
                    <source srcset="./images/projects/abco.png" type="image/png">
                    <img src="./images/projects/abco.png" alt="Snímek webu firmy ABCO expert">
                </picture>
            </a>
            <div class="meta">
                <h3>ABCO expert</h3>
                <p class="labels">Webové stránky</p>
            </div>
        </div>
        <div id="zvoneckova" class="project">
            <a href="https://www.zvoneckova.cz/" class="image" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/projects/zvoneckova.webp" type="image/webp">
                    <source srcset="./images/projects/zvoneckova.jpg" type="image/jpeg">
                    <img src="./images/projects/zvoneckova.jpg" alt="Koláž obrazů karvinské malířky Veroniky Zvonečkové">
                </picture>
            </a>
            <div class="meta">
                <h3>Veronika Zvonečková</h3>
                <p class="labels">Webové stránky</p>
            </div>
        </div>
        <div id="umyjto" class="project">
            <a href="https://umyj.to/" class="image" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/projects/umyj_to.webp" type="image/webp">
                    <source srcset="./images/projects/umyj_to.png" type="image/png">
                    <img src="./images/projects/umyj_to.png" alt="Logo firmy Umyj to">
                </picture>
            </a>
            <div class="meta">
                <h3>Umyj to</h3>
                <p class="labels">Webové stránky &bull; Branding</p>
            </div>
        </div>
        <div id="mesk" class="project fw-r">
            <figure class="image">
                <picture>
                    <source srcset="./images/projects/mesk.webp" type="image/webp">
                    <source srcset="./images/projects/mesk.png" type="image/png">
                    <img src="./images/projects/mesk.png" alt="Snímek aplikace Mesk">
                </picture>
            </figure>
            <div class="meta">
                <h3>Mesk &lpar;Pracovní název&rpar;</h3>
                <p class="labels">Design aplikace &bull; Konzultace</p>
            </div>
        </div>
        <div id="artyx" class="project fw-l">
            <a href="https://artyx.cz/" class="image" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/projects/artyx.webp" type="image/webp">
                    <source srcset="./images/projects/artyx.png" type="image/png">
                    <img src="./images/projects/artyx.png" alt="Snímek webu grafického studia Artyx">
                </picture>
            </a>
            <div class="meta">
                <h3>Artyx</h3>
                <p class="description">Extravagantní web pro kreativní grafické studio z Karviné</p>
                <p class="labels">Webové stránky</p>
            </div>
        </div>
    </div>
    <div class="partners">
        <div class="container">
            <h2>Strategický partner facilitující budoucí růst</h2>
            <p>Společně s našimi partnery zúročíme naše letité zkušenosti a pomůžeme Vám ve Vaší cestě za úspěchem.</p>
        </div>
        <div class="partners_carousel">
            <a href="https://www.webglobe.cz/" class="partner" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/partners/webglobe.webp" type="image/webp">
                    <source srcset="./images/partners/webglobe.png" type="image/png">
                    <img src="./images/partners/webglobe.png" alt="Logo firmy Webglobe na červeném podkladě">
                </picture>
            </a>
            <a href="https://www.vyzkumak.cz/" class="partner" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/partners/vyzkumak.webp" type="image/webp">
                    <source srcset="./images/partners/vyzkumak.png" type="image/png">
                    <img src="./images/partners/vyzkumak.png" alt="Logo UX laboratoře vyzkumak.cz">
                </picture>
            </a>
            <a href="https://ecomail.cz/" class="partner" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/partners/ecomail.webp" type="image/webp">
                    <source srcset="./images/partners/ecomail.png" type="image/png">
                    <img src="./images/partners/ecomail.png" alt="Logo firmy Ecomail">
                </picture>
            </a>
            <a href="https://www.rokkr.cz/" class="partner" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/partners/rokkr.webp" type="image/webp">
                    <source srcset="./images/partners/rokkr.png" type="image/png">
                    <img src="./images/partners/rokkr.png" alt="Logo digitální agentury Rokkr">
                </picture>
            </a>
            <a href="https://spolehliverecenze.cz/" class="partner" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/partners/spolehlive_recenze.webp" type="image/webp">
                    <source srcset="./images/partners/spolehlive_recenze.png" type="image/png">
                    <img src="./images/partners/spolehlive_recenze.png" alt="Logo firmy Spolehlivé recenze na žlutém podkladě">
                </picture>
            </a>
            <a href="https://www.karvina.cz/" class="partner" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/partners/karvina.webp" type="image/webp">
                    <source srcset="./images/partners/karvina.png" type="image/png">
                    <img src="./images/partners/karvina.png" alt="Logo Statutárního města Karviná">
                </picture>
            </a>
            <a href="https://startovarna.eu/" class="partner" target="_blank" rel="noopener">
                <picture>
                    <source srcset="./images/partners/startup_msk.webp" type="image/webp">
                    <source srcset="./images/partners/startup_msk.png" type="image/png">
                    <img src="./images/partners/startup_msk.png" alt="Logo projektu Startup MSK">
                </picture>
            </a>
        </div>
    </div>
    <?php require_once 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuBtn = document.getElementById("menu_btn");
            const mobileMenu = document.getElementById("mobile_menu");
            let menuOpen = false;

            menuBtn.addEventListener("click", function() {
                if (menuOpen) {
                    mobileMenu.classList.remove("open");
                    menuOpen = false;
                } else {
                    mobileMenu.classList.add("open");
                    menuOpen = true;
                }
            });

            document.getElementById("mobile_menu_anchor").addEventListener("click", function() {
                mobileMenu.classList.remove("open");
                menuOpen = false;
                setTimeout(function() {
                    document.getElementById("nase-prace").scrollIntoView({ behavior: 'smooth' });
                }, 350);
            });

            const boxes = gsap.utils.toArray(".partner");
            const loop = horizontalLoop(boxes, {
                paused: false,
                repeat: -1,
                speed: 0.5,
            });

            /*
            This helper function makes a group of elements animate along the x-axis in a seamless, responsive loop.

            Features:
             - Uses xPercent so that even if the widths change (like if the window gets resized), it should still work in most cases.
             - When each item animates to the left or right enough, it will loop back to the other side
             - Optionally pass in a config object with values like "speed" (default: 1, which travels at roughly 100 pixels per second), paused (boolean),  repeat, reversed, and paddingRight.
             - The returned timeline will have the following methods added to it:
               - next() - animates to the next element using a timeline.tweenTo() which it returns. You can pass in a vars object to control duration, easing, etc.
               - previous() - animates to the previous element using a timeline.tweenTo() which it returns. You can pass in a vars object to control duration, easing, etc.
               - toIndex() - pass in a zero-based index value of the element that it should animate to, and optionally pass in a vars object to control duration, easing, etc. Always goes in the shortest direction
               - current() - returns the current index (if an animation is in-progress, it reflects the final index)
               - times - an Array of the times on the timeline where each element hits the "starting" spot. There's also a label added accordingly, so "label1" is when the 2nd element reaches the start.
             */
            function horizontalLoop(items, config) {
                items = gsap.utils.toArray(items);
                config = config || {};
                let tl = gsap.timeline({repeat: config.repeat, paused: config.paused, defaults: {ease: "none"}, onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100)}),
                    length = items.length,
                    startX = items[0].offsetLeft,
                    times = [],
                    widths = [],
                    xPercents = [],
                    curIndex = 0,
                    pixelsPerSecond = (config.speed || 1) * 100,
                    snap = config.snap === false ? v => v : gsap.utils.snap(config.snap || 1), // some browsers shift by a pixel to accommodate flex layouts, so for example if width is 20% the first element's width might be 242px, and the next 243px, alternating back and forth. So we snap to 5 percentage points to make things look more natural
                    totalWidth, curX, distanceToStart, distanceToLoop, item, i;
                gsap.set(items, { // convert "x" to "xPercent" to make things responsive, and populate the widths/xPercents Arrays to make lookups faster.
                    xPercent: (i, el) => {
                        let w = widths[i] = parseFloat(gsap.getProperty(el, "width", "px"));
                        xPercents[i] = snap(parseFloat(gsap.getProperty(el, "x", "px")) / w * 100 + gsap.getProperty(el, "xPercent"));
                        return xPercents[i];
                    }
                });
                gsap.set(items, {x: 0});
                totalWidth = items[length-1].offsetLeft + xPercents[length-1] / 100 * widths[length-1] - startX + items[length-1].offsetWidth * gsap.getProperty(items[length-1], "scaleX") + (parseFloat(config.paddingRight) || 0);
                for (i = 0; i < length; i++) {
                    item = items[i];
                    curX = xPercents[i] / 100 * widths[i];
                    distanceToStart = item.offsetLeft + curX - startX;
                    distanceToLoop = distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");
                    tl.to(item, {xPercent: snap((curX - distanceToLoop) / widths[i] * 100), duration: distanceToLoop / pixelsPerSecond}, 0)
                        .fromTo(item, {xPercent: snap((curX - distanceToLoop + totalWidth) / widths[i] * 100)}, {xPercent: xPercents[i], duration: (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond, immediateRender: false}, distanceToLoop / pixelsPerSecond)
                        .add("label" + i, distanceToStart / pixelsPerSecond);
                    times[i] = distanceToStart / pixelsPerSecond;
                }
                function toIndex(index, vars) {
                    vars = vars || {};
                    (Math.abs(index - curIndex) > length / 2) && (index += index > curIndex ? -length : length); // always go in the shortest direction
                    let newIndex = gsap.utils.wrap(0, length, index),
                        time = times[newIndex];
                    if (time > tl.time() !== index > curIndex) { // if we're wrapping the timeline's playhead, make the proper adjustments
                        vars.modifiers = {time: gsap.utils.wrap(0, tl.duration())};
                        time += tl.duration() * (index > curIndex ? 1 : -1);
                    }
                    curIndex = newIndex;
                    vars.overwrite = true;
                    return tl.tweenTo(time, vars);
                }
                tl.next = vars => toIndex(curIndex+1, vars);
                tl.previous = vars => toIndex(curIndex-1, vars);
                tl.current = () => curIndex;
                tl.toIndex = (index, vars) => toIndex(index, vars);
                tl.times = times;
                tl.progress(1, true).progress(0, true); // pre-render for performance
                if (config.reversed) {
                    tl.vars.onReverseComplete();
                    tl.reverse();
                }
                return tl;
            }
        });
    </script>
</body>

</html>