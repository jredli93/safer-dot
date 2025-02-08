const element = document.getElementById("popup");

if (localStorage.getItem('subscribed') === null) {
  setTimeout(openPopUp, 7000);
}


function openPopUp() {
    element.style.display = "block";
    element.style.opacity = "1";
}

const myDiv = document.getElementById("popup");
const popupClose = document.getElementById("popup-close");

// Listen for clicks on the entire document
document.addEventListener("click", (event) => {
    // If the clicked element is not the div itself, hide the div
    if (!myDiv.contains(event.target) || popupClose.contains(event.target)) {
        myDiv.style.display = "none";
    }
});

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
                src: ["/assets/images/video.mp4"],
                loop: false,
                mute: true,
            },
            src: "/assets/images/bgvideo2.png",
            loop: true,
            muted: true
        },
    ],
});

AOS.init();

document.getElementById("myForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    const email = document.getElementById("email-address").value;

    if (email) {
        console.log("subscribed");
        localStorage.setItem("subscribed", true);

        this.submit();
    }
});
