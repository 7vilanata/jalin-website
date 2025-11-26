// resources/js/app.js

import Swiper from "swiper/bundle";
import "swiper/css/bundle";

window.addEventListener("load", () => {

     function updateTexts(swiper, index) {
        const activeSlide = swiper.slides[swiper.activeIndex];
        if (!activeSlide) return;

        const data = activeSlide.dataset;

        // Update the text content
        const bigTitleEl    = document.getElementById(`bigTitle-${index}`);
        const mobileSideTitleEl = document.getElementById(`mobileSideTitle-${index}`);
        const sideTitleEl   = document.getElementById(`sideTitle-${index}`);

        if (bigTitleEl)    bigTitleEl.textContent    = data.bigTitle   || 'Coming Soon';
        if (mobileSideTitleEl) mobileSideTitleEl.textContent = data.mobileSideTitle || 'Upcoming Event';
        if (sideTitleEl)   sideTitleEl.textContent   = data.sideTitle   || 'Upcoming Event';
    }

    new Swiper('.swiper-gallery-rawleague', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

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
         on: {
            init: function () {
                updateTexts(this, 1);  // Update text on init
            },
            slideChange: function () {
                updateTexts(this, 1);  // Update text on slide change
            },
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
         on: {
            init: function () {
                updateTexts(this, 2);  // Update text on init
            },
            slideChange: function () {
                updateTexts(this, 2);  // Update text on slide change
            },
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
         on: {
            init: function () {
                updateTexts(this, 3);  // Update text on init
            },
            slideChange: function () {
                updateTexts(this, 3);  // Update text on slide change
            },
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
