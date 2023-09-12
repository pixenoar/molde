import './bootstrap';

import * as bootstrap from 'bootstrap'

 // PIXENO

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';


const swiperCards = new Swiper(".swiperCards", {

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints:{
        0:{
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 25,
        },
        576:{
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 30,
        },
        768:{
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 40,
        },
        992:{
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 50,
        },
    },

});

const swiperGaleria = new Swiper(".swiperGaleria", {

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

});