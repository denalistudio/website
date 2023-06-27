// Function for links to anchors on the front page
function navLinks() {
    document.querySelectorAll("[data-link]").forEach((link) => {
        const target = document.querySelector(`[data-anchor="${link.dataset.link}"]`);
        link.onclick = () => {
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            };
        };
    });
};
navLinks();

// Function for zooming the hero image when scrolled
function heroImage() {
    const image = document.getElementById("hero_image");
    let scrolled = window.scrollY;
    let top = image.offsetTop;
    let percents;

    function zoomImage() {
        scrolled = window.scrollY;
        if ((scrolled >= top / 2) && (scrolled <= top)) {
            percents = (scrolled - top / 2) / (top / 2);
            percents = 1 - percents;
            image.querySelector("img").style.setProperty("--zoom", percents);
        } else if (scrolled >= top) {
            percents = 0;
            image.querySelector("img").style.setProperty("--zoom", percents);
        }
    };

    function recalculateOnResize() {
        scrolled = window.scrollY;
        top = image.offsetTop;
        zoomImage();
    };

    window.addEventListener("scroll", zoomImage);
    window.addEventListener("resize", recalculateOnResize);
};
heroImage();