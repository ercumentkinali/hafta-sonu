import Swiper from 'swiper';
import {FreeMode} from 'swiper/modules';

var swiper = new Swiper(".news-swiper", {
    slidesPerView: 'auto',
    centeredSlides: false,
    freeMode: true,
    modules: [FreeMode],
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

});



