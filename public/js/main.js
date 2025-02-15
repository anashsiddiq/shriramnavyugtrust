

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    autoplay: {
        delay: 3000, 
        disableOnInteraction: false, 
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true, 
});


document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".navbar-nav .dropdown");

    dropdowns.forEach(function (dropdown) {
        const menu = dropdown.querySelector(".dropdown-menu");

        dropdown.addEventListener("mouseenter", function () {
            menu.style.display = "block";
            menu.style.opacity = "0";
            menu.style.transition = "opacity 0.2s ease-in-out";
            setTimeout(() => {
                menu.style.opacity = "1";
            }, 10);
        });

        dropdown.addEventListener("mouseleave", function () {
            menu.style.opacity = "0";
            setTimeout(() => {
                menu.style.display = "none";
            }, 60000); 
        });
    });
});