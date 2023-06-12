var testimonial = new Swiper(".customer-txt-swiper", {
    spaceBetween: 10,
    slidesPerView: 1,
    speed: 800,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    grabCursor: true
});

// var testimonialImg = new Swiper(".customer-img-swiper", {
//     spaceBetween: 10,
//     slidesPerView: 1,
//     speed: 800,
//     grabCursor: true

// });


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



// testimonial.controller.control = testimonialImg
// testimonialImg.controller.control = testimonial

