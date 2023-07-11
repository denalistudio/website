// Mobile header
const menuOpenBtn = document.getElementById("menu_open_btn");
const menuCloseBtn = document.getElementById("menu_close_btn");
const slide = document.getElementById("slide");
const menu = document.getElementById("menu");
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

// Write current year into the copyright claim
document.getElementById("copyright_year").innerHTML = new Date().getFullYear();