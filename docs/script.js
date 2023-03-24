document.getElementById("copyright_year").innerHTML = new Date().getFullYear();

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