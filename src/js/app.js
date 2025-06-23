import { fnLazyloadIframes, Navbar, SlidingNav, Accordions } from "@overdog/fn"

fnLazyloadIframes()

/**
--------------------------------------------------------------------------
Navigation
--------------------------------------------------------------------------
*/
new Navbar("#navbar", {
   scrollTopDistance: 40,
   behavior: "sticky"
}).init()

new SlidingNav("#nav-buttons-group", {
   delayBetweenOpenings: 0,
   backTransition: ""
}).init()

/**
--------------------------------------------------------------------------
Accordions
--------------------------------------------------------------------------
*/
if (document.querySelector(".accordions-group-wrapper")) {
   new Accordions(".accordions-group-wrapper", {
      // your options here - see options below
   }).init()
}

/**
--------------------------------------------------------------------------
Swiper
--------------------------------------------------------------------------
*/
if (document.querySelector("[data-swiper-name]")) {
   import(
      /* webpackChunkName: "swiper" */
      "./swiper/instances.js")
}