const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,


    /* If we need pagination
    pagination: {
      el: '.swiper-pagination',
    }, */

    // Navigation arrows
    navigation: {
      nextEl: '.ponente_anterior',
      prevEl: '.ponente_siguiente',
    },

    // Responsive breakpoints
    breakpoints: {
        0:{
                slidesPerView: 2
        },
        620:{
                slidesPerView: 4
        },
        1024:{
                slidesPerView: 6
        }
    }
  });
