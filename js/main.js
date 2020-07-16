// トップへ戻るボタン
function() {
    var pagetop = ('#page_top');
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) { // 100pxスクロールしたら表示
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body, html').animate({
            scrollTop: 0;
        }, 500); //0.5秒かけてトップへ移動
        return false;
    });
}

var mySwiper = new Swiper('.swiper-container', {
    effectAllowed: "flip",
    loop: true,
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
})