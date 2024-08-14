import Swiper from 'swiper';
import {FreeMode} from 'swiper/modules';
import {Pagination} from 'swiper/modules';

var swiper = new Swiper(".news-swiper", {
    slidesPerView: 'auto',
    centeredSlides: false,
    freeMode: true,
    modules: [FreeMode,Pagination],
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }
});



