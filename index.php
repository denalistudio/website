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
            <li><a href="./sluzby.php">Služby</a></li>
            <li><span id="mobile_menu_anchor">Naše práce</span></li>
            <li><a href="https://forms.clickup.com/9010068483/f/8cgnf03-7435/DPB8AH6HSY55BBXDTU" target="_blank" rel="noopener">Kontakt</a></li>
        </ul>
    </nav>
    <header id="header-desktop">
        <div class="container">
            <a href="./" id="logo">Denali studio</a>
            <nav>
                <a href="./sluzby.php">Služby</a>
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
                <li><a href="./sluzby.php#branding">Branding</a></li>
                <li><a href="./sluzby.php#webove-stranky">Webové stránky</a></li>
                <li><a href="./sluzby.php#e-shopy">E&dash;shopy</a></li>
                <li><a href="./sluzby.php#marketing">Marketing</a></li>
                <li><a href="./sluzby.php#rizeni-projektu">Řízení projektů</a></li>
            </ul>
        </div>
    </div>
    <div id="nase-prace" class="projects">
        <div id="alianas" class="project">
            <a href="https://alianas.cz/cz/" class="image" target="_blank" rel="noopener">
                <img src="./images/projects/alianas.jpg" alt="Šperk od firmy Alianas">
            </a>
            <div class="meta">
                <h3>Alianas</h3>
                <p class="labels">Ecommerce &bull; Design</p>
            </div>
        </div>
        <div id="udime_doma" class="project">
            <figure class="image">
                <img src="./images/projects/udime_doma.jpg" alt="Web firmy Udíme doma na mobilním telefonu">
            </figure>
            <div class="meta">
                <h3>Udíme doma</h3>
                <p class="description">Inovativní e-commerce řešení a branding pro lídra na trhu s příslušenstvím pro udírny</p>
                <p class="labels">Branding &bull; Design &bull; Ecommerce</p>
            </div>
        </div>
        <div id="pps_kania" class="project fw-l">
            <a href="https://www.pps-kania.cz/" class="image" target="_blank" rel="noopener">
                <img src="./images/projects/pps_kania.png" alt="Snímek webu firmy PPS Kania">
            </a>
            <div class="meta">
                <h3>PPS Kania</h3>
                <p class="description">Moderní a elegantní webové stránky pro projekční firmu z Ostravy</p>
                <p class="labels">Webové stránky</p>
            </div>
        </div>
        <div id="abco" class="project fw-r">
            <a href="https://www.abco.cz/" class="image" target="_blank" rel="noopener">
                <img src="./images/projects/abco.png" alt="Snímek webu firmy ABCO expert">
            </a>
            <div class="meta">
                <h3>ABCO expert</h3>
                <p class="labels">Webové stránky</p>
            </div>
        </div>
        <div id="zvoneckova" class="project">
            <a href="https://www.zvoneckova.cz/" class="image" target="_blank" rel="noopener">
                <img src="./images/projects/zvoneckova.jpg" alt="Koláž obrazů karvinské malířky Veroniky Zvonečkové">
            </a>
            <div class="meta">
                <h3>Veronika Zvonečková</h3>
                <p class="labels">Webové stránky</p>
            </div>
        </div>
        <div id="umyjto" class="project">
            <a href="https://umyj.to/" class="image" target="_blank" rel="noopener">
                <img src="./images/projects/umyj_to.png" alt="Logo firmy Umyj to">
            </a>
            <div class="meta">
                <h3>Umyj to</h3>
                <p class="labels">Webové stránky &bull; Branding</p>
            </div>
        </div>
        <div id="mesk" class="project fw-r">
            <figure class="image">
                <img src="./images/projects/mesk.png" alt="Snímek aplikace Mesk">
            </figure>
            <div class="meta">
                <h3>Mesk &lpar;Pracovní název&rpar;</h3>
                <p class="labels">Design aplikace &bull; Konzultace</p>
            </div>
        </div>
        <div id="artyx" class="project fw-l">
            <a href="https://artyx.cz/" class="image" target="_blank" rel="noopener">
                <img src="./images/projects/artyx.png" alt="Snímek webu grafického studia Artyx">
            </a>
            <div class="meta">
                <h3>Artyx</h3>
                <p class="description">Extravagantní web pro kreativní grafické studio z Karviné</p>
                <p class="labels">Webové stránky</p>
            </div>
        </div>
    </div>
    <?php require_once 'footer.php'; ?>
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
        });
    </script>
</body>

</html>