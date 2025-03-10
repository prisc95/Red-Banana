import Swiper from 'swiper/bundle'; 

var swiper2 = new Swiper(".reviewSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    scrollbar: {
      el: ".swiper-reviews-scrollbar",
      draggable: true,
    },
    navigation: {
      nextEl: ".reviews-scroll-icon-right",
      prevEl: ".reviews-scroll-icon-left",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });
