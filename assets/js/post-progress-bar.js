window.addEventListener("load", () => {
    // Getting height of page
    const body = document.body;
    const html = document.documentElement;
    const height = Math.max(body.getBoundingClientRect().height, html.getBoundingClientRect().height);

    // Elements
    const progressBar = document.getElementById("progress_bar");
    const article = document.querySelector("main.single_post");
    const footer = document.querySelector("footer");

    // Getting parameters of article
    const articleHeight = article.scrollHeight + (2 * rem);
    const articleTop = article.getBoundingClientRect().top - (2 * rem);

    // Getting height of footer
    const footerHeight = footer.scrollHeight;

    // Variables
    let scrolled = window.scrollY;
    let footerVisiblePixels = Math.round(footerHeight - height + scrolled + window.innerHeight);
    let footerVisible;

    function footerVisibility() {
        footerVisiblePixels = Math.round(footerHeight - height + scrolled + window.innerHeight);

        if (footerVisiblePixels <= 0) {
            footerVisible = 0;
        } else {
            footerVisible = footerVisiblePixels;
        };
    };
    footerVisibility();

    let progressBarWidth = ((scrolled - articleTop + footerVisible) / (articleHeight - window.innerHeight)) * 100;

    function progress() {
        if (progressBarWidth <= 0) {
            progressBar.style.setProperty("--width", "0%");
        } else if (progressBarWidth >= 100) {
            progressBar.style.setProperty("--width", "100%");
        } else if (progressBarWidth > 0 && progressBarWidth < 100) {
            progressBar.style.setProperty("--width", `${progressBarWidth}%`);
        };

        if (scrolled >= articleTop && scrolled <= articleHeight + articleTop) {
            progressBar.className = "visible";
        } else if (scrolled < articleTop) {
            progressBar.className = "";
        } else if (scrolled > articleHeight + articleTop) {
            progressBar.className = "hidden";
        }

        console.log(scrolled, articleHeight, articleTop)
    };
    progress();

    window.addEventListener("scroll", () => {
        footerVisibility();
        scrolled = window.scrollY;
        progressBarWidth = ((scrolled - articleTop + footerVisible) / (articleHeight - window.innerHeight)) * 100;
        progress();
    });
});