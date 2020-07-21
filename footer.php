<footer class="footer">
    
    <div class="container">
    </div>

</footer>

</div><!-- wrapper end ▲ wrapperクラスの初め部分はheader部分に -->

<!-- Bootstrap4 jQuery Popper CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- swiperJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>

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

<?php wp_footer(); ?>
</body>
</html>