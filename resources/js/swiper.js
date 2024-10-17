import Swiper from 'swiper';
import {FreeMode} from 'swiper/modules';
import {Pagination} from 'swiper/modules';

var swiper = new Swiper(".news-swiper", {
    slidesPerView: 'auto',
    centeredSlides: false,
    freeMode: true,
    speed: 0.1,
    modules: [FreeMode,Pagination],
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }
});




