$(window).on('load',function(){
    // Swiper Clients

    var swiper1 = new Swiper('.swiper-clients', {
        spaceBetween: 50,
        speed: 1000,
        autoplay: 10000,
        slidesPerView: 5,
        loop: true,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 50
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            600: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        }
    });

    // Swiper Clients
    var swiper2 = new Swiper('.swiper-testimonials', {
        speed: 1000,
        autoplay: 10000,
        slidesPerView: 1,
        loop: true
    });
});