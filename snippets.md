```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <nav>
    <a href="index.html">
      <img src="triangle.svg">
    </a>
    <a href="#news">Znalostní báze</a>
    <div class="drop">
      <button class="drop-button">Více &#9662;</button>
      <div class="drop-content">
        <a class="drop-first" href="#">Odkaz 1</a>
        <a href="#">Odkaz 2</a>
        <a class="drop-last" href="#">Odkaz 3</a>
      </div>
    </div>
  </nav>
  <aside>
    <input type="text" id="search" onkeyup="search()" placeholder="Search">
  </aside>
  <main id="main">
    <article>
      <img src="img1.jpg">
      <h1>Lorem ipsum dolor sit amet</h1>
      <p class="description">Consectetur adipiscing elit. Morbi vel varius sapien, sed consectetur lacus. Praesent
        eleifend, turpis sit amet venenatis consequat, dolor eros molestie nisi, ut efficitur erat velit ac lorem.
      </p>
    </article>
    <article id="clanek2">
      <img src="img1.jpg">
      <h1>Proin orci erat</h1>
      <p class="description">Placerat nec venenatis ac, maximus et enim. Nulla facilisi. Suspendisse dignissim
        risus id risus ullamcorper tincidunt. Aenean a egestas nulla. Maecenas laoreet est a orci rhoncus
        bibendum.
      </p>
    </article>
  </main>
  <script>
    // Search
    function search() {
      var input, filter, main, article, a, i, txtValue;
      input = document.getElementById('search') // Search bar ID
      filter = input.value.toUpperCase()
      main = document.getElementById('main') // List ID
      article = main.getElementsByTagName('article')

      for (i = 0; i < article.length; i++) {
        a = article[i].getElementsByTagName('h1')[0]; // Search in "this" tag name
        txtValue = a.textContent || a.innerText
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          article[i].style.display = ''
        } else {
          article[i].style.display = 'none'
        }
      }
    }

    /* Initials
    var name1 = 'Jakub';
    var name2 = 'Klapka';
    var initials = name1.charAt(0) + name2.charAt(0);
    document.getElementById('initials').innerHTML = initials;
    */
  </script>
</body>

</html>
```

```scss
@import "./fonts";

@mixin outline {
  box-shadow: 0 0 0 1px #c9c9c9;
}

$accent: #4f54ff;
$hover: #e6e6e6;

body {
  font-family: "Roboto", sans-serif;
  margin: auto;
  overflow-x: hidden;
  & a {
    text-decoration: none;
    color: #000;
  }
}

nav {
  @include outline();
  width: 100%;
  position: fixed;
  background-color: #fff;
  left: 0;
  top: 0;
  height: 50px;
  z-index: 1;
  & img {
    width: 24px;
    margin-left: 8px;
  }
  & a {
    float: left;
    padding: 14px 16px;
  }
  & a:hover {
    color: $accent;
  }
}

.drop {
  float: left;
}

.drop-button {
  font-size: 1rem;
  color: #000;
  border: none;
  outline: none;
  padding: 0.875rem 1rem;
  background-color: inherit;
  font-family: inherit;
  &:hover {
    color: $accent;
  }
}

.drop-content {
  @include outline();
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 10rem;
  border-radius: 0.3125rem;
  margin-top: -0.625rem;
  & a {
    float: none;
    color: #000;
    padding: 0.75rem 1rem;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  & a:hover {
    background-color: $hover;
    display: block;
  }
}

.drop:hover .drop-content {
  display: block;
}

.drop-first {
  border-radius: 5px 5px 0 0;
}

.drop-last {
  border-radius: 0 0 5px 5px;
}

aside {
  @include outline();
  background-color: rgb(250, 250, 250);
  height: 100%;
  width: 200px;
  position: fixed;
  left: 0;
  top: 50px;
  padding: 16px;
  & input {
    width: 95%;
  }
}

main{
  margin-left: 300px;
  margin-top: 100px;
  display: flex;
}

article {
  @include outline();
  width: 800px;
  padding: 10px;
  margin-right: 50px;
  border-radius: 5px;
  &:hover {
    background-color: $hover;
  }
  & img {
    width: 100%;
    border-radius: 5px;
  }
  & h1,
  p {
    margin-top: 0px;
    margin-bottom: 0px;
  }
}
```

```scss
@font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 100;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOiCnqEu92Fr1Mu51QrEz4dL_nz.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 100;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOiCnqEu92Fr1Mu51QrEzAdLw.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOjCnqEu92Fr1Mu51TjASc0CsTKlA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 300;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOjCnqEu92Fr1Mu51TjASc6CsQ.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOjCnqEu92Fr1Mu51S7ACc0CsTKlA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOjCnqEu92Fr1Mu51S7ACc6CsQ.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 700;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 900;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOjCnqEu92Fr1Mu51TLBCc0CsTKlA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 900;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOjCnqEu92Fr1Mu51TLBCc6CsQ.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 100;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1MmgVxGIzIFKw.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 100;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1MmgVxIIzI.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 900;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmYUtfChc4EsA.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 900;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmYUtfBBc4.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
```