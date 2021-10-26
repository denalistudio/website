// Finding width
width();
window.addEventListener('resize', width);
function width() {
    var bodyWidth = document.body.clientWidth;
    document.documentElement.style.setProperty('--bodyWidth', bodyWidth + 'px');
    var fractionWidth = (bodyWidth - 100) / 10;
    document.documentElement.style.setProperty('--fractionWidth', fractionWidth + 'px');
};

// Hamburger menu
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
        document.documentElement.style.setProperty('--navHeight', 226 + 'px');
    } else {
        menuBtn.classList.remove('open');
        menuOpen = false;
        document.documentElement.style.setProperty('--navHeight', 60 + 'px');
    }
});
function menu() {
    var menu = document.querySelector('.mobile-menu');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
};

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
document.getElementById('desktop-search').onclick = function searchResults() {
    document.getElementById('search-results').style.display = 'block';
};
document.getElementById('desktop-search').ondblclick = function searchResultsHide() {
    document.getElementById('search-results').style.display = 'none';
};

    // Dragscroll, Copyright © 2015 asvd, Provided under the MIT License, https://github.com/asvd/dragscroll
    (function (root, factory) {
        if (typeof define === 'function' && define.amd) {
            define(['exports'], factory);
        } else if (typeof exports !== 'undefined') {
            factory(exports);
        } else {
            factory((root.dragscroll = {}));
        }
    }(this, function (exports) {
        var _window = window;
        var _document = document;
        var mousemove = 'mousemove';
        var mouseup = 'mouseup';
        var mousedown = 'mousedown';
        var EventListener = 'EventListener';
        var addEventListener = 'add' + EventListener;
        var removeEventListener = 'remove' + EventListener;
        var newScrollX, newScrollY;
        var dragged = [];
        var reset = function (i, el) {
            for (i = 0; i < dragged.length;) {
                el = dragged[i++];
                el = el.container || el;
                el[removeEventListener](mousedown, el.md, 0);
                _window[removeEventListener](mouseup, el.mu, 0);
                _window[removeEventListener](mousemove, el.mm, 0);
            }
            dragged = [].slice.call(_document.getElementsByClassName('dragscroll'));
            for (i = 0; i < dragged.length;) {
                (function (el, lastClientX, lastClientY, pushed, scroller, cont) {
                    (cont = el.container || el)[addEventListener](
                        mousedown,
                        cont.md = function (e) {
                            if (!el.hasAttribute('nochilddrag') ||
                                _document.elementFromPoint(
                                    e.pageX, e.pageY
                                ) == cont
                            ) {
                                pushed = 1;
                                lastClientX = e.clientX;
                                lastClientY = e.clientY;
                                e.preventDefault();
                            }
                        }, 0
                    );
                    _window[addEventListener](
                        mouseup, cont.mu = function () { pushed = 0; }, 0
                    );
                    _window[addEventListener](
                        mousemove,
                        cont.mm = function (e) {
                            if (pushed) {
                                (scroller = el.scroller || el).scrollLeft -=
                                    newScrollX = (- lastClientX + (lastClientX = e.clientX));
                                scroller.scrollTop -=
                                    newScrollY = (- lastClientY + (lastClientY = e.clientY));
                                if (el == _document.body) {
                                    (scroller = _document.documentElement).scrollLeft -= newScrollX;
                                    scroller.scrollTop -= newScrollY;
                                }
                            }
                        }, 0
                    );
                })(dragged[i++]);
            }
        }
        if (_document.readyState == 'complete') {
            reset();
        } else {
            _window[addEventListener]('load', reset, 0);
        }
        exports.reset = reset;
    }));

// MultiLanguage, Copyright © 2015 Bas de Reuver, Provided under the MIT License, https://github.com/BdR76/MultiLanguage
var multilang;
function onLoad() {
    multilang = new MultiLang('languages.json', null, this.initList);
}
function langSelectChange(sel) {
    multilang.setLanguage(sel.value);
    refreshLabels();
}
function initList() {
    var list = document.getElementsByName("listlanguages")[0];
    list.options.length = 0;
    for (var key in multilang.phrases) {
        var lang = document.createElement("option");
        lang.value = key;
        lang.innerHTML = multilang.phrases[key]['langdesc'];
        list.appendChild(lang);
    }
    refreshLabels();
}
function refreshLabels() {
    var allnodes = document.body.querySelectorAll("h1, h2, h3, h4, p, a, span");
    for (var i = 0, max = allnodes.length; i < max; i++) {
        var idname = allnodes[i].id;
        if (idname != '') {
            allnodes[i].textContent = multilang.get(idname);
        };
    };
}
var MultiLang = function (url, lang, onload) {
    this.phrases = {};
    this.selectedLanguage = (lang || navigator.language || navigator.userLanguage).substring(0, 2);
    this.onLoad = onload;
    if (typeof url !== 'undefined') {
        var obj = this;
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.onreadystatechange = function (evt) {
            if (evt.target.readyState == 4 && evt.target.status == 200) {
                this.phrases = JSON.parse(evt.target.responseText);
                this.setLanguage(this.selectedLanguage);
                if (this.onLoad) {
                    this.onLoad();
                }
            }
        }.bind(obj);
        req.addEventListener("error", function (e) {
            console.log('MultiLang.js: Error reading json file.');
        }, false);
        req.send(null);
    }
    this.setLanguage = function (langcode) {
        if (!this.phrases.hasOwnProperty(langcode)) {
            for (var key in this.phrases) {
                if (this.phrases.hasOwnProperty(key)) {
                    langcode = key;
                    break;
                }
            }
        }
        this.selectedLanguage = langcode;
    }
    this.get = function (key) {
        var str;
        if (this.phrases[this.selectedLanguage]) str = this.phrases[this.selectedLanguage][key];
        str = (str || key);
        return str;
    }
}

/*
The MIT License (MIT)
Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/