// obtain plugin
var cc = initCookieConsent();

// run plugin with your configuration
cc.run({
    current_lang: "cs",
    autoclear_cookies: true,                   // default: false
    page_scripts: true,                        // default: false

    mode: 'opt-in',                            // default: 'opt-in'; value: 'opt-in' or 'opt-out'
    delay: 0,                                  // default: 0
    auto_language: null,                       // default: null; could also be 'browser' or 'document'
    autorun: true,                             // default: true
    // force_consent: false,                   // default: false
    // hide_from_bots: true,                   // default: true
    // remove_cookie_tables: false             // default: false
    // cookie_name: 'cc_cookie',               // default: 'cc_cookie'
    // cookie_expiration: 182,                 // default: 182 (days)
    // cookie_necessary_only_expiration: 182   // default: disabled
    // cookie_domain: location.hostname,       // default: current domain
    // cookie_path: '/',                       // default: root
    // cookie_same_site: 'Lax',                // default: 'Lax'
    // use_rfc_cookie: false,                  // default: false
    // revision: 0,                            // default: 0

    gui_options: {
        consent_modal: {
            layout: 'box',                     // default: 'box'; values: 'box', 'bar', 'banner'
            position: 'bottom',                // default: 'bottom'; values: 'bottom', 'top'
            transition: 'slide',               // default: 'slide'; values: 'slide', 'fade', 'hide'
        },
    },

    languages: {
        "cs": {
            consent_modal: {
                title: "Používáme cookies!",
                description: 'Tyto webové stránky používají soubory cookies. Ty nám pomáhají lépe chápat vaši aktivitu na webu a vylepšovat naše stránky.  Cookies se spustí až po udělení souhlasu. <button type="button" data-cc="c-settings" class="cc-link">Upravit možnosti</button>',
                primary_btn: {
                    text: "Přijmout vše",
                    role: 'accept_all'              // 'accept_selected' or 'accept_all'
                },
                secondary_btn: {
                    text: "Odmítnout vše",
                    role: 'accept_necessary'        // 'settings' or 'accept_necessary'
                }
            },
            settings_modal: {
                title: "Nastavení cookies",
                save_settings_btn: "Uložit nastavení",
                accept_all_btn: "Přijmout vše",
                reject_all_btn: "Odmítnout še",
                close_btn_label: "Zavřít",
                cookie_table_headers: [
                    { col1: "Název" },
                    { col2: "Doména" },
                    { col3: "Expirace" },
                    { col4: "Popis" }
                ],
                blocks: [
                    {
                        title: "Použití cookies",
                        description: "Soubory cookies používáme k analýze údajů o návštěvnících webu. Díky tomu můžeme náš web zlepšovat tak, aby byl pro Vás co nejlepší.",
                    }, {
                        title: "Analytické cookies",
                        description: "Tyto cookies nám umožňují zkoumat vaši aktivitu na stránce a přizpůsobovat náš web tak, aby byl pro návštěvníky co nejlepší. Data sbíraná pomocí těchto cookies jsou anonymní a jsou dále předávány společnosti Google Ireland Limited.",
                        toggle: {
                            value: "analytics",     // your cookie category
                            enabled: false,
                            readonly: false
                        },
                        cookie_table: [             // list of all expected cookies
                            {
                                col1: "_ga",       // match all cookies starting with "_ga"
                                col2: "google.com",
                                col3: "2 roky",
                                col4: "Slouží k rozlišení uživatelů.",
                                is_regex: true
                            },
                            {
                                col1: "_ga_P6M4FM1Y0W",
                                col2: "google.com",
                                col3: "2 roky",
                                col4: "Slouží k zachování stavu relace.",
                            }
                        ]
                    }
                ]
            }
        }
    }
});