import Swiper from 'swiper/bundle'; 

var swiper1 = new Swiper(".productSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    scrollbar: {
      el: ".swiper-products-scrollbar",
      draggable: true,
    },
    navigation: {
      nextEl: ".products-scroll-icon-right",
      prevEl: ".products-scroll-icon-left",
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


function likeProduct() { 
  this.classList.toggle("fa-regular");
  this.classList.toggle("fa-solid")
  };


const likeButtons = document.getElementsByClassName("fa-heart");

for (const button of likeButtons){
  button.addEventListener("click", likeProduct);
}




