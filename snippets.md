# Snippets

## age-counter

A year counter that counts the exact year count from a specified date and prints it in the document. **Use inline** - "We are a *25* year old company."

```html
<p>
    It is exactly
    <script>
        var birthDate = new Date(2004, 6, 15, 0, 0, 0, 0);
        var currentDate = new Date();
        var age = currentDate.getFullYear() - birthDate.getFullYear();
        var month = currentDate.getMonth() - birthDate.getMonth();
        var day = currentDate.getDate() - birthDate.getDate();
        if (month < 0 || (month == 0 && day < 0)) {
            age--;
        }
        document.write(age);
    </script>
    years from the date 15. 6. 2004.
</p>
```

## copyright

A simple copyright text with a clickable copyright symbol referring you to the Wikipedia copyright page and an automatically adapting copyright year changing with device time. **Use inline** - In the *footer* sections of webpages.

```html
<div class="copyright">
    <p class="text-uppercase">
        <script>document.write(new Date().getFullYear())</script>Copyright holder
    </p>
</div>
```

```css
.copyright {
    text-decoration: none;
}
```

## nav-top

A great but simple navigation bar with drop-down functionality. Amazing for almost every website. **Use inline** - In a website *navigation* bar

```html
<nav>
    <a href="index.html"><img src="logo.svg"></a>
    <a href="#">Home</a>
    <a href="#">News</a>
    <div class="drop">
        <button class="drop-button">Dropdown &#9662;</button>
        <div class="drop-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
</nav>
```

```css
body {
    margin: 0px;
}

nav {
    overflow: hidden;
    box-shadow: 0px 0px 0px 1px rgb(201, 201, 201);
}

nav a {
    float: left;
    font-size: 16px;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.drop {
    float: left;
    overflow: hidden;
}

.drop .drop-button {
    font-size: 16px;
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

nav a:hover, .drop:hover .drop-button {
    color: blue;
}

.drop-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 0px 0px 1px rgb(201, 201, 201);
    z-index: 1;
    border-radius: 5px;
    margin-top: -10px;
}

.drop-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.drop-content a:hover {
    background-color: #ddd;
}

.drop:hover .drop-content {
    display: block;
}
```

## social-tags

Basic Open Graph and Twitter Cards tags, more Open Graph [here](https://ogp.me/) and Twitter Cards [here](https://developer.twitter.com/en/docs/twitter-for-websites/cards/overview/markup). **Use in head** - For better *social presence*

```html
<meta property="og:type" content="website">
<meta property="og:title" content="Great title">
<meta property="og:description" content="Great description">
<meta property="og:image" content="great-image.png">
```

```html
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="greatwebsite.com">
<meta property="twitter:url" content="hgreatwebsite.com">
<meta name="twitter:title" content="Great title">
<meta name="twitter:description" content="Great description">
<meta name="twitter:image" content="great-image.png">
```

## search-simple

Basic search form with a simple search input and a submit button. **Use inline** - In the *navigation* sections of webpages.

```html
<input type="text" id="search" onkeyup="myFunction()" placeholder="Search">
```

```javascript
    function myFunction() {
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("search");
      filter = input.value.toUpperCase();
      ul = document.getElementById("list");
      li = ul.getElementsByTagName("li");

      const cb = document.getElementById('checkbox-h1');
      console.log(cb.checked);

      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h1")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
```
