$(".close").click(function () {
    $(this).parent(".alert").fadeOut();
});

$("#header").vegas({
    transition: "flash2",
    animation: "random",
    timer: false,
    slides: [
        {
            video: {
                src: ["/assets/images/highway.mp4"],
                loop: false,
                mute: true,
            },
            src: "/assets/images/highway-background.png",
        },
        {
            src: "/assets/images/homepage-slider1.jpg",
        },
        {
            src: "/assets/images/homepage-slider2.jpg",
        },
    ],
});

AOS.init();
