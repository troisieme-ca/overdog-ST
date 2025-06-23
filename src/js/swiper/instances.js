/*
--------------------------------------------------------------------------
  SWIPER PARAMS
--------------------------------------------------------------------------
*/

// import Swiper
import Swiper from "swiper"
// import Swiper Modules - only the ones you will use
import { A11y, Navigation, Pagination } from "swiper/modules"
// import Core Swiper core SCSS
import "swiper/css"
import "swiper/css/a11y"
import "swiper/css/navigation"
import "swiper/css/pagination"

// Init the modules
Swiper.use([A11y, Navigation, Pagination])

const gallerySwiper = new Swiper("[data-swiper-name=\"gallery\"]", {
   slideClass: "swiper-slide-gallery", // better control on slide class and avoid flash on js load
   slidesPerView: 1.2,
   spaceBetween: 24,
   autoHeight: false,
   grabCursor: true,
   watchOverflow: true,
   observer: true,
   navigation: {
      nextEl: ".gallery-swiper-button-next",
      prevEl: ".gallery-swiper-button-prev"
   },
   breakpoints: {
      576: {
         slidesPerView: 1.75
      },
      768: {
         slidesPerView: 2.2,
         spaceBetween: 32
      },
      1024: {
         slidesPerView: 3.1,
         spaceBetween: 32
      },
      1200: {
         slidesPerView: 3.1,
         spaceBetween: 32
      }
   }
})
