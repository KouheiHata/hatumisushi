//トップへ戻るボタン
$(function(){
        var pageTop = $('#page_top');
        pageTop.hide();
        $(window).scroll(function(){
            if($(this).scrollTop() > 200) {
                pageTop.fadeIn();
            } else {
                pageTop.fadeOut();
            }
        });
        pageTop.click(function(){
            $('body, html').animate({scrollTop:0}, 1000, 'swing');
            return false;
        });
    });

// スライダー
var mySwiper = new Swiper('.swiper-container', {
//    autoplay: {
//        delay: 2000,
//    },
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
});
