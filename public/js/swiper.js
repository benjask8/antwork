import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

const swiper = new Swiper('.hero-swiper', {
    autoplay: {
        delay: 5000,
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