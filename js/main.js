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
// 予約ボタン
$(function(){
    var reserve = $('#reserve');
    reserve.hide();
    $(window).scroll(function(){
        if($(this).scrollTop() > 200) {
            reserve.fadeIn();
        } else {
            reserve.fadeOut();
        }
    });
});

// スライダー
var mySwiper = new Swiper('.swiper-container', {
    autoplay: {
        delay: 2000,
    },
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


/* instagram(jquery) */
$(function () {
    try {
        this.name = "hatumisusi";
        $.ajax('https://www.instagram.com/' + this.name + '/', {
            timeout: 2000,
            datatype: 'html'
        }).then(function (data) {
            json_string = data.split("window._sharedData = ")[1];
            json_string = json_string.split("};</" + "script>")[0] + "}";
            this.Arrya_data = JSON.parse(json_string);
            let datas = this.Arrya_data.entry_data.ProfilePage[0].graphql.user.edge_owner_to_timeline_media.edges;
            for (i=0; i<8; i++) {
                url = datas[i].node.display_url;
                this.html = `
                <div class="card">
                    <img src="${url}" class="card-img-top" />
                </div>
                `;
                $(".insta-card").append(this.html);
            }
        });
    } catch (error) {
        alert(error);
    }
})
