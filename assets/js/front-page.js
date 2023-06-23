function heroImage() {
    const element = document.getElementById("hero_image");
    let scrolled = window.scrollY;
    let top = element.offsetTop;
    let percents;

    function zoomImage() {
        scrolled = window.scrollY;
        if ((scrolled >= top / 2) && (scrolled <= top)) {
            percents = (scrolled - top / 2) / (top / 2);
            percents = 1 - percents;
            element.querySelector("img").style.setProperty("--zoom", percents);
        };
    };

    function recalculateOnResize() {
        scrolled = window.scrollY;
        top = element.offsetTop;
        zoomImage();
    };

    window.addEventListener("scroll", zoomImage);
    window.addEventListener("resize", recalculateOnResize);
};
heroImage();