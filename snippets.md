<p>Some cool code snippets we created and will create ;)</p>

<h2><b>Automatic copyright</b></h2>
<p>This footer automatically displays the current year based on the device time. Also, clicking on the copyright symbol redirects you to the Wikipedia copyright page in a new window.</p>

```html
<div class="copyright"><p class="text-uppercase"><a href="https://cs.wikipedia.org/wiki/Autorsk%C3%A9_pr%C3%A1vo" target="_blank" rel="noopener noreferrer">&copy; </a><script>document write(new Date().getFullYear())</script>Copyright holder</p></div>
```