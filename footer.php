<footer class="footer">
    
    <div class="container">
        <div class="row">
            <div class="container-inner">
               
                <p class="text-center text-white">© copy right 2020</p>
                
            </div>
        </div>
    </div>

</footer>
<!-- トップへ戻るボタン -->
<div id="page_top" class="arrow"><a href="#top"></a></div>
</div><!-- wrapper end ▲ wrapperクラスの初め部分はheader部分に -->

<!-- Bootstrap4 jQuery Popper CDN -->
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>-->
<!-- スムーズスクロール実装のためスリム版から通常ミニ版へ変更 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(function() {
        $('.menu').on('click',function(){
            $('.menu-line').toggleClass('active');
            $('.navigation-fluid').toggleClass('hide');
        });
    });
</script>

<script>
    $(function() {
        var menu_offset = $(".nav-box").offset().top;
        $(window).scroll(
            function(){
                var my_offset = $(window).scrollTop();
                if(menu_offset < my_offset){
                    $(".nav-box").addClass("fixed-top");
                } else {
                    $(".nav-box").removeClass("fixed-top");
                }
            }
        )
        });
</script>
<script>
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
</script>

<?php wp_footer(); ?>
</body>
</html>