import Swiper from 'swiper/bundle'; 

var swiper3 = new Swiper(".blogSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    scrollbar: {
      el: ".swiper-blog-scrollbar",
      draggable: true,
    },
    navigation: {
      nextEl: ".blog-scroll-icon-right",
      prevEl: ".blog-scroll-icon-left",
    },
    breakpoints: {
      360: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
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
