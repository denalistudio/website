## Problémy

- [ ] opravit overflow .services
> Když interaguju se .services, nemůžu pak scrollovat na stránce jelikož jsem v "locked-in" stavu u overflow services - potřebujeme default scrolling body at all times

```html
    <ul id="search-results">
        <h3 id="search-mainsite"></h3>
        <li><a id="search-mainsite-result-services" href="#services-heading"></a></li>
        <li><a id="search-mainsite-result-pricing" href="#pricing-heading"></a></li>
        <li><a id="search-mainsite-result-client" href="#client-heading"></a></li>
        <li><a id="search-mainsite-result-contact" href="#contact-heading"></a></li>
        <h3 id="search-knowledgebase"></h3>
        <li><a href="#">Calvin</a></li>
        <li><a href="#">Christina</a></l>
        <li><a href="#">Cindy</a></li>
    </ul>
```

```html
    <input type="text" id="desktop-search" onkeyup="desktopSearch()" placeholder="Search">
    <input type="text" id="mobile-search" onkeyup="mobileSearch()" placeholder="Search">
```

```json
		"search-mainsite": "Main site",
		"search-mainsite-result-services": "Our services",
		"search-mainsite-result-pricing": "Pricing",
		"search-mainsite-result-client": "Our Clients",
		"search-mainsite-result-contact": "Contact",

        "search-mainsite": "Hlavní stránka",
		"search-result-services": "Naše služby",
```

```js
        // Search function - mobile
        function mobileSearch() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('mobile-search');
            filter = input.value.toUpperCase();
            ul = document.getElementById('search-results');
            li = ul.getElementsByTagName('li');

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName('a')[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = 'block';
                } else {
                    li[i].style.display = 'none';
                }
            };
        };
        document.getElementById('mobile-search').onclick = function searchResults() {
            document.getElementById('search-results').style.display = 'block';
        };
        document.getElementById('mobile-search').ondblclick = function searchResultsHide() {
            document.getElementById('search-results').style.display = 'none';
        };

        // Search function - desktop
        function desktopSearch() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('desktop-search');
            filter = input.value.toUpperCase();
            ul = document.getElementById('search-results');
            li = ul.getElementsByTagName('li');

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName('a')[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = 'block';
                } else {
                    li[i].style.display = 'none';
                }
            };
        };
        document.getElementById('desktop-search').onkeydown = function searchResults() {
            document.getElementById('search-results').style.display = 'block';
        };
        document.getElementById('desktop-search').ondblclick = function searchResultsHide() {
            document.getElementById('search-results').style.display = 'none';
        };
```