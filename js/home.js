var testimonial = new Swiper(".customer-txt-swiper", {
    spaceBetween: 10,
    slidesPerView: 1,
    speed: 800,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    grabCursor: true
    // breakpoints: {
    //     1025: {
    //         slidesPerView: 7,
    //     },
    //     991: {
    //         slidesPerView: 5,
    //     },
    //     641: {
    //         slidesPerView: 3,
    //     }
    // }
});

var testimonialImg = new Swiper(".customer-img-swiper", {
    spaceBetween: 10,
    slidesPerView: 1,
    speed: 800,
    grabCursor: true

});


var bannerSwiper = new Swiper(".banner-swiper", {
    spaceBetween: 20,
    slidesPerView: 1,
    speed: 3000,
    grabCursor: true,
    loop: true,
    autoplay: {
        delay: 1000
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },

});



testimonial.controller.control = testimonialImg
testimonialImg.controller.control = testimonial