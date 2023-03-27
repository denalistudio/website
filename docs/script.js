document.getElementById("copyright_year").innerHTML = new Date().getFullYear();

document.getElementById("kontakt-anchor").onclick = function () {
    document.getElementById("kontakt").scrollIntoView({ behavior: "smooth" });
}

$(window).scroll(function () {
    $("video").each(function () {
        const video = $(this);
        if (video.visible(true)) {
            video[0].play();
        } else {
            video.prop("currentTime", 0);
            video[0].pause();
        };
    });
});