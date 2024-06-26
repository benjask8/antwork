import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

const swiper = new Swiper('.hero-swiper', {
    autoplay: {
        delay: 10000,
      },
// Optional parameters
direction: 'horizontal',
loop: true,

// If we need pagination
pagination: {
  el: '.swiper-pagination',
},

// Navigation arrows
navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
},

// And if we need scrollbar
scrollbar: {
  el: '.swiper-scrollbar',
},
});


var swiper1 = new Swiper(".mySwiper", {
  slidesPerView: "auto",
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});