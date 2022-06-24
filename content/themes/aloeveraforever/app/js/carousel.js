import Swiper from 'swiper';
import SwiperCore, { Navigation, Pagination } from 'swiper/core';
SwiperCore.use([Navigation, Pagination]);

const ProductCarousel = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 1,
  spaceBetween:10,
  breakpoints: {
    768:{
      slidesPerView: 2,
    },
    992:{
      slidesPerView: 3,
    },
    1200:{
      slidesPerView: 4,
      //cssMode: true,
    }
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
    pageUpDown: true,
  },

  mousewheel: {
    invert: true,
  },

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

export {ProductCarousel};

const ProductGallery = new Swiper('.productGallerySwipperContainer', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 1,
  // keyboard: {
  //   enabled: true,
  //   onlyInViewport: false,
  //   pageUpDown: true,
  // },

  // mousewheel: {
  //   invert: true,
  // },

  // If we need pagination
  pagination: {
    el: '.productGallerySwipperContainerPagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});

export {ProductGallery};



const ProductRelatedCarousel = new Swiper('.productRelatedSwipperContainer', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 1,
  spaceBetween:10,
  breakpoints: {
    768:{
      slidesPerView: 1,
    },
    992:{
      slidesPerView: 1,
    },
    1200:{
      slidesPerView: 1,
      //cssMode: true,
    }
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
    pageUpDown: true,
  },

  mousewheel: {
    invert: true,
  },

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

export {ProductRelatedCarousel};
