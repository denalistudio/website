// Function for links to anchors on the front page
function mobileNavLinks() {
    document.querySelectorAll("#menu [data-link]").forEach((link) => {
        const target = document.querySelector(`[data-anchor="${link.dataset.link}"]`);
        link.onclick = () => {
            if (target) {
                slide.classList.remove("hidden");
                slide.classList.add("visible");
                setTimeout(() => {
                    slide.classList.remove("visible");
                    menu.classList.remove("visible");
                }, 300);
                setTimeout(() => {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }, 550);
                menuOpen = false;
            };
        };
    });
};
mobileNavLinks();

function anchorLinks() {
    document.querySelectorAll("#header-desktop [data-link], footer [data-link]").forEach((link) => {
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
anchorLinks();

// Function for zooming the hero image when scrolled
function heroVideo() {
    const video = document.getElementById("hero_video");
    let scrolled = window.scrollY;
    let top = video.offsetTop;
    let percents;

    function zoomVideo() {
        scrolled = window.scrollY;
        if ((scrolled >= top / 2) && (scrolled <= top)) {
            percents = (scrolled - top / 2) / (top / 2);
            percents = 1 - percents;
            video.querySelector("video").style.setProperty("--zoom", percents);
        } else if (scrolled >= top) {
            percents = 0;
            video.querySelector("video").style.setProperty("--zoom", percents);
        }
    };

    function recalculateOnResize() {
        scrolled = window.scrollY;
        top = video.offsetTop;
        zoomVideo();
    };

    window.addEventListener("scroll", zoomVideo);
    window.addEventListener("resize", recalculateOnResize);
};
heroVideo();