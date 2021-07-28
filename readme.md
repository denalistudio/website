# **Read Me**
<p>Readme.md je dokument, ve kterém najdeme specifické informace k programování, jako například příkazy nebo kód, co chceme integrovat. Markdown je jednoduchý jazyk a syntax najdeme <a href="https://daringfireball.net/projects/markdown/syntax>">zde</a>.</p>

- [ ] Finální **redesign** *(Affinity)*
- [ ] MARGINSSSSSSSSSSSS!!!!!!!!!!!!!!!!!
- [ ] Chci sekce *Wordpress* a *Envato Elements* v **svg**, ale neumím dobře rasterizovat obrázek uvnitř -kuba
- [ ] Optimalizace pro **Safari 15** *(Menu barvy, search bar)*
- [ ] Remove Overlay for now
- [ ] Fix Footer :(
- [ ] E-mail, domena a grafické práce nejsou **good**
- [x] **Twitter** Cards a **Facebook** Open graph

<br>

## **Optimalizace pro Safari 15**
```
<meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: dark)">

html {padding-top: env(safe-area-inset-top);}
body{margin-bottom: env(safe-area-inset-bottom);}
```

## **Twitter Cards a Open Graph**
```
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://idk.com/">
<meta name="twitter:creator" content="@9to5toys">
<meta name="twitter:creator" content="@9to5toys">
<meta name="twitter:label1" content="Written by">
<meta name="twitter:data1" content="Nona Porter">

<meta property="og:url" content="https://www.studiodenali.cz/"> <!--Open Graph Protocol-->
<meta property="og:type" content="website">
<meta property="og:title" content="Postaráme se o vaši přítomnost na internetu">
<meta property="og:description" content="Jsme studio, které pro vás vytvoří webové stránky a postará se o ně, ukážeme vám jak na sociální sítě, zařídíme, abyste byli v mapách a mnoho dalšího. To vše za jeden měsíční poplatek včetně domény a hostingu.">
<meta property="og:image" content="https://www.studiodenali.cz/img/og-preview.png">
```

## **Kompilace**
```
npx mix watch
```

<br>

# **Starý kód**

## **Overlay**
```
            <style>
                #over-elektra {
                    position: fixed;
                    display: none;
                    width: 100%;
                    height: 100%;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: white;
                    z-index: 2
                }

                #over-text {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    font-size: 50px;
                    color: black;
                    transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%)
                }

                #elektra-image:hover {
                    opacity: 50%;
                }
            </style>
            <div id="over-elektra" class="container-fluid">
                <!-- elektra -->
                <header>
                    <div class="row">
                        <div class="col d-flex justify-content-start">
                            <div class="header-logo">
                                <a href="https://www.studiodenali.cz">
                                    <svg width="100%" height="100%" viewBox="0 0 387 59">
                                        <rect x="0" y="0" width="387" height="58.281" style="fill:#4f54ff;" />
                                        <text x="10.82px" y="45.549px"
                                            style="font-family:'Roboto', sans-serif;font-weight:900;font-size:46.203px;fill:#fff;">STUDIO
                                            DENALI</text>
                                        <path d="M364.737,12.739l9.97,16.194l-19.939,0l9.969,-16.194Z"
                                            style="fill:#fff;" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="close-btn">
                                <svg id="over-elektra.off" width="100%" height="100%" viewBox="0 0 58 58"
                                    style="cursor:pointer;">
                                    <rect x="0" y="0" width="58" height="58" style="fill:#4f54ff;" />
                                    <g transform="matrix(1,0,0,1,15.887,15.887)">
                                        <path d="M0,26.227L26.227,0"
                                            style="fill:none;fill-rule:nonzero;stroke:#fff;stroke-width:7px;" />
                                    </g>
                                    <g transform="matrix(1,0,0,1,15.887,15.887)">
                                        <path d="M26.227,26.227L0,0"
                                            style="fill:none;fill-rule:nonzero;stroke:#fff;stroke-width:7px;" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </header>
                <main>
                    <div class="row" style="margin-top: 48px;">
                        <div class="col">
                            <a href="http://www.caffeclubelektra.cz/" target="_blank">
                                <iframe src="http://www.caffeclubelektra.cz/" width="100%" height="450%" scrolling="yes"
                                    frameborder="0" title="Navštívit webové stránky Caffe Club Elektra"></iframe>
                            </a>
                        </div>
                    </div>
                </main>
            </div>
            <script>
                document.getElementById("over-elektra.on").onclick = function elektraon() { document.getElementById("over-elektra").style.display = "block"; }
                document.getElementById("over-elektra.off").onclick = function elektraoff() { document.getElementById("over-elektra").style.display = "none"; }
            </script>
        </main>
    </div>
```

## **Kontakt v commentu**
```
            <div class="row row-cols-1 row-cols-sm-2 contact">
                <div class="col d-flex flex-sm-column justify-content-center">
                    <h1 class="text-nowrap text-uppercase text-center"><mark class="mark-white">kontakt</mark></h1>
                </div>
                <div class="col">
                    <h4 class="text-nowrap text-uppercase"><mark class="mark-white">e-mail</mark></h4>
                    <a title="Poslat e-mail" href="mailto:jakubklapka@studiodenali.cz">
                        <h6>jakubklapka@studiodenali.cz</h6>
                    </a>
                    <h4 class="text-nowrap text-uppercase"><mark class="mark-white">mobil</mark></h4>
                    <a title="Zavolat" href="tel:+420736285455">
                        <h6>+420 736 285 455</h6>
                    </a>
                    <h4 class="text-nowrap text-uppercase"><mark class="mark-white">facebook</mark></h4>
                    <a title="Sledujte nás na Facebooku" href="https://www.facebook.com/Studio-Denali-108396014744044"
                        target="_blank">
                        <h6 style="margin: 0px;">facebook.com/studiodenali</h6>
                    </a>
                </div>
            </div>
```