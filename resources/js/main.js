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
                src: ["/assets/images/highway1.mp4"],
                loop: false,
                mute: true,
            },
            src: "/assets/images/cta.jpg",
        },
    ],
});

AOS.init();
