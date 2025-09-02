// resources/js/app.js

import Swiper from "swiper/bundle";
import "swiper/css/bundle";

window.addEventListener("load", () => {
    new Swiper(".swiper-container-1", {
        direction: "vertical", // 👈 Vertical scroll
        loop: true, // 👈 Infinite loop
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-page-1",
            clickable: true,
        },
    });

    new Swiper(".swiper-container-2", {
        direction: "vertical", // 👈 Vertical scroll
        loop: true, // 👈 Infinite loop
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-page-2",
            clickable: true,
        },
    });

    new Swiper(".swiper-container-3", {
        direction: "vertical", // 👈 Vertical scroll
        loop: true, // 👈 Infinite loop
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-page-3",
            clickable: true,
        },
    });

    new Swiper(".gallerySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
