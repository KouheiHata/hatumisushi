// トップページのスライドswiper
var mySwiper = new Swiper('.swiper-container', {
    effect: 'fade',
    speed: 1000,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
})