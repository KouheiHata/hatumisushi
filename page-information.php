<?php

/*
Template Name: 店舗情報
*/

?>

<?php get_header(); ?>

<main id="main" class="main">
    <section class="info-section">
        <div class="container">
            <div class="row">
                <h2 class="col-12 mb-3">営業時間</h2>
                <p class="col-12 mb-5">１１：００～１４：００<br>１７：００～２３：００</p>
                <h2 class="col-12">定休日</h2>
                <p class="col-12 mb-5">毎週日曜（法事など特別な予約にはご相談承ります）</p>
                <h2 class="col-12 mb-3">部屋数、座席数</h2>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/counter-seat.jpg')); ?>" alt="">
                    <p class="text-center mb-3">１階　カウンター席（最大８人）</p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/large-room2.jpg')); ?>" alt="">
                    <p class="text-center mb-3">２階　大部屋（８人～２０人）</p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 offset-md-2">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/8mat-room.jpg')); ?>" alt="">
                    <p class="text-center mb-3">２階　８畳間（４人～６人）</p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/hearth-room.jpg')); ?>" alt="">
                    <p class="text-center mb-3">１階　囲炉裏部屋（４人～８人）</p>
                </div>
                <p class="col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-md-2 mt-3">足や膝の負担が少なく、お食事と会話を楽しんでいただけますようにテーブルと椅子に、１階の囲炉裏部屋は一部が足を降ろし腰掛け出来るようになっています。</p>
                <h2 class="col-12 mt-5">駐車場</h2>
                <p class="col-12 mb-5">１０台までお車を駐車できます。</p>
                <h2 class="col-12">禁煙</h2>
                <p class="col-12 mb-5">全面禁煙となっております。</p>
                <h2 class="col-12">アクセス</h2>
                <p class="col-12 mb-5">商工会議所前駅/福武線　徒歩４分（300m）</p>
                <h2 class="col-12">お支払い方法</h2>
                <p class="col-12 mb-5">各種クレジットカードなど</p>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <h2 class="">ご予約</h2>
                    <p class="mb-3">TEL:0776-36-7017</p>
                    <button class="button-square"><a href="https://airrsv.net/hatumisushi/calendar" target="_blank">予約サイト<i class="fas fa-angle-double-right pl-3"></i></a></button>
                    <p class="mt-3">※予約サイトで仮予約後、こちらからお電話して確定となります。</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/back-door.jpg')); ?>" alt="裏口">
                    <p class="">裏から入ればそのまま囲炉裏部屋などの個室を利用できます。</p>
                </div>
            </div>
        </div><!-- container end -->

    </section><!-- section06 end -->
    <?php get_template_part('component/map'); ?>
</main><!-- main end -->

<?php get_footer(); ?>
