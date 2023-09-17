document.addEventListener("DOMContentLoaded", function () {
    // REM unit
    const rem = parseFloat(getComputedStyle(document.documentElement).fontSize);

    // Cursor
    const cursor = document.getElementById("cursor");
    
    document.addEventListener("mousemove", function (e) {
        const x = e.clientX;
        const y = e.clientY;
        cursor.style.left = x + "px";
        cursor.style.top = y + "px";
    });

    document.querySelectorAll("a, button, [data-cursor='grow']").forEach(function(el) {
        el.addEventListener("mouseover", function () {
            cursor.classList.add("grow");
        });
        el.addEventListener("mouseleave", function () {
            cursor.classList.remove("grow");
        });
    });

    // Mobile header
    const menuOpenBtn = document.getElementById("menu_open_btn");
    const menuCloseBtn = document.getElementById("menu_close_btn");
    const slide = document.getElementById("header_slide");
    const menu = document.getElementById("header_menu");
    let menuOpen = false;

    menuOpenBtn.onclick = () => {
        if (!menuOpen) {
            menuOpenBtn.classList.add("open");
            slide.classList.add("visible");
            menu.classList.add("visible");
            setTimeout(() => {
                slide.classList.add("hidden");
                slide.classList.remove("visible");
            }, 300);
            menuOpen = true;
        };
    };

    menuCloseBtn.onclick = () => {
        if (menuOpen) {
            slide.classList.remove("hidden");
            slide.classList.add("visible");
            setTimeout(() => {
                slide.classList.remove("visible");
                menu.classList.remove("visible");
            }, 300);
            menuOpen = false;
        };
    };

    function hideMenuOnResize() {
        if (window.innerWidth > (62 * rem) && menuOpen) {
            slide.classList.remove("hidden");
            menu.classList.remove("visible");
            menuOpen = false;
        };
    };
    window.addEventListener("resize", hideMenuOnResize);

    // Header border bottom
    function headerBorderBottom(y) {
        console.log("hello");
        if (y >= 1) {
            document.querySelectorAll("#header-mobile, #header-desktop").forEach(function(el) {
                el.classList.add("border");
            });
        } else {
            document.querySelectorAll("#header-mobile, #header-desktop").forEach(function(el) {
                el.classList.remove("border");
            });
        };
    };

    let scrolled = window.scrollY;
    headerBorderBottom(scrolled);

    window.addEventListener("resize", function() {
        scrolled = window.scrollY;
        headerBorderBottom(scrolled);
    });

    window.addEventListener("scroll", function() {
        scrolled = window.scrollY;
        headerBorderBottom(scrolled);
    });
});