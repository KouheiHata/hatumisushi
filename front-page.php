<?php get_header(); ?>

<div id="main" class="main">
    <!-- main start ▼ -->

    <section class="section section01">
        <div class="container">
            <div class="row">
                <h2 class="col-12 text-center mb-5">
                    初味寿司について
                </h2>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/shop-gate1.jpg')); ?>" alt="" width="580">
                    <p class="mt-3 mb-5">昭和３９年創業「初味寿司」の、玄関をあけてアプローチを進んでいくと、江戸の寿司屋の屋台を模した<ruby>庇<rt>ひさし</rt></ruby>があるカウンターがお出迎えします。</p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/shop-gate2.jpg')); ?>" alt="" width="360">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/shop-counter1.jpg')); ?>" alt="">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="container-inner">
                        <p class="mt-3 mb-5">カウンターは黒御影石。床はこだわりの笏谷石。<br>そして５ｍを超える一枚ガラスのネタケースの中は、地元市場仕入れた旬の魚たちが並んでいます。</p>
                    </div>
                </div>
                <div class="grid-box1">
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/meisui.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/rise.jpg')); ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <p class="mt-3 mb-5">シャリは、奥越産コシヒカリを越前市赤谷町の名水で炊き上げ、<br>相性の良いまろやかな山吹酢と合わせ仕上げています。</p>
                </div>
                <div class="col-12">
                    <div class="container-inner">
                        <p class="mb-12 pl-5">
                            ようこそ、いらっしゃいませ。<br>五感で味わう至福のひと時を、ごゆっくりとご堪能ください。
                        </p>
                    </div>
                </div>
                <button class="button-square centering mt-5"><a href="<?php echo esc_url(home_url('information')); ?>">店舗情報を<br>より詳しく<i class="fas fa-angle-double-right pl-3"></i></a></button>
            </div><!-- row end -->
        </div><!-- container end -->
    </section><!-- section1 end -->

    <section class="section section02">
        <div class="container">
            <div class="row">
               <article id="fav-article" class="fav-article row"><!-- サブループ -->
                  <?php
                $args = array(
                'post_type' => 'post',
                'category_name' => 'favorite', //ここで出すカテゴリーを設定
                'posts_per_page' => '1',
                );
                $new_query = new WP_Query($args);
                if($new_query->have_posts()): while($new_query->have_posts()):$new_query->the_post();
                ?>
                    <h3 class="mb-3 col-xl-6 col-lg-6 col-md-6"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p class="col-xl-6 col-lg-6 mb-3"><?php the_time('Y年m月d日(l)'); ?></p>
                    <div class="mb-5 col-xl-6 col-lg-6"><?php the_content(); //本文 ?></div>
                    <div class="mb-5 col-xl-6 col-lg-6 text-center"><?php the_post_thumbnail('large'); ?></div>
                    <?php endwhile; wp_reset_postdata(); else: ?>
                    <?php endif; ?>
               </article>

                <div class="grid-box2">
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/gallery-image1.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/gallery-image2.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/gallery-image3.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/gallery-image4.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/gallery-image5.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/gallery-image6.jpg')); ?>" alt="">
                    </div>
                </div>

                <div class="grid-box3">
                    <div class="box-item">盛り合わせ</div>
                    <div class="box-item">1,800円</div>
                    <div class="box-item">上握り</div>
                    <div class="box-item">2,800円</div>
                    <div class="box-item">特上握り</div>
                    <div class="box-item">3,500円</div>
                    <div class="box-item">ちらし</div>
                    <div class="box-item">1,800円</div>
                    <div class="box-item">特巻</div>
                    <div class="box-item">3,500円</div>
                </div>
                <div class="col-12 mt-5">
                    <button class="button-square centering"><a href="<?php echo esc_url(home_url('/menu')) ?>">メニューを<br>より詳しく<i class="fas fa-angle-double-right pl-3"></i></a></button>
                </div>

            </div><!-- row end -->
        </div><!-- container end -->
    </section><!-- section2 end -->

    <section class="section section03">
        <div class="container">
            <div class="row">
                <h2 class="col-12 text-center mb-5">
                    会食や法事、色々なイベントにも
                </h2>
                <div class="col-12 text-center mb-5">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/large-room.jpg')); ?>" alt="２階大部屋　８人～２０人" width="830">
                    <h3 class="mt-3 text-center">２階大部屋（８人～２０人）</h3>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center mb-5">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/8mat-room.jpg')); ?>" alt="２階８畳間（４人～６人）">
                    <h3 class="text-center">２階８畳間（４人～６人）</h3>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center mb-5">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/hearth-room.jpg')); ?>" alt="１階囲炉裏部屋（４人～８人）">
                    <h3 class="text-center">１階囲炉裏部屋（４人～８人）</h3>
                </div>
                <div class="col-12">
                    <div class="container-inner">
                        <h3 class="mb-5">足や膝の負担が少なく、お食事と会話を楽しんでいただけますようにテーブルと椅子に、１階の囲炉裏部屋は一部が足を下ろし腰掛けできるようになっています。</h3>
                    </div>
                </div>
                <div class="col-12">
                    <button class="button-square centering"><a href="<?php echo esc_url(home_url('event')); ?>">会食や法事などを<br>より詳しく<i class="fas fa-angle-double-right pl-3"></i></a></button>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->
    </section><!-- section03メニュー end -->

    <section class="section section04">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="col-12 text-center mb-5">オリジナル商品</h3>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-5">
                    <h4 class="sec4-header">福井県の伝統的発酵食品「鯖へしこ」を使ったオリジナル商品</h4>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/hesikopaste.jpg')); ?>" alt="" class="product-image1">
                    <h5 class="product-name">【越前　鯖へしこチーズ】<br>（要予約）</h5>
                    <p class="product-caption">鯖の糠漬け「へしこ」をマスカルポーネチーズと合わせてクリーミーに仕上げました。野菜スティックのディップにするのが一押しです。また、辛口の日本酒や切れ味の良い白ワインとも抜群に合います。<br>鯖へしこの新しい楽しみ方のひとつとして、生まれた商品です。<br>姉妹商品の「越前鯖へしこバター」は無塩バターと合わせたもので、調理等にお使いいただくのがおすすめです。</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-5">
                    <h4 class="sec4-header">他に類の無い珍味</h4>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/kaninosho.jpg')); ?>" alt="蟹乃醤" class="product-image1">
                    <h5 class="product-name">【越前蟹乃醤　えちぜんかにのしょう】<br>（冬期仕込み、数量限定）</h5>
                    <p class="product-caption">越前蟹のメス（地元では「セイ甲蟹」という）を、生きたまま特製醤油ダレに漬け込んだものです。蟹の旨味を凝縮した朱色の卵の内子、プチプチとした食感の外子、生ならではのトロリとした蟹身の３種の味が楽しめます。日本種との相性は最高で、リピート率が高い商品です。</p>
                </div>

            </div><!-- row end -->
        </div><!-- container end -->
    </section><!-- section04 end -->

    <section class="section section05">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h3 class="font-weight-bold mb-3">初味寿司&nbsp;本店</h3>
                    <address class="grid-box4">
                        <div class="box-item mail">〒918-8005</div>
                        <div class="box-item address">福井県福井市みのり2-3-12</div>
                        <div class="box-item">TEL</div>
                        <div class="box-item">0776-36-7017</div>
                        <div class="box-item">定休日</div>
                        <div class="box-item">日曜日</div>
                        <div class="box-item work-time">営業時間</div>
                        <div class="box-item work-time">11:00~14:00<br>17:00~23:00</div>
                    </address>
                    <iframe class="gmap-mini" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.7226100260605!2d136.21501408122649!3d36.05147513285856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8bebaf33cdbd3%3A0x55b46f2f58d34d4f!2z5Yid5ZGz5a-_5Y-4IOacrOW6lw!5e0!3m2!1sja!2sjp!4v1595813013544!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <h3 class="mb-5">Facebook</h3>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v8.0" nonce="F6KjcIkL"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/hatumisusi/" data-tabs="timeline" data-width="" data-height="650" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/hatumisusi/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hatumisusi/">初味寿司本店</a></blockquote>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <h3 class="mb-5">Instagram</h3>
                    <a href="https://www.instagram.com/hatumisusi/" target="_blank">
                        <div class="card-columns insta-card"></div>
                    </a>
                </div>

            </div><!-- row end -->
        </div><!-- container end -->
    </section><!-- section05 end -->

</div><!-- main end ▲ -->
<?php get_footer(); ?>
