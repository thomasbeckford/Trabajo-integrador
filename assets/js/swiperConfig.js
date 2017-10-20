
var swiper = new Swiper('.swiper-container', {
     effect: 'zoom',
     mode: 'horizontal',
     centeredSlides: true,
     navigation: false,
     runCallbacksOnInit: true,
     //mousewheel: true,
     autoplay: {
       delay: 5000, // 5 seg
       disableOnInteraction: false,
     },

     pagination: {
       el: '.swiper-pagination',
     },
   });
