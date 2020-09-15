<?php

/*
Template Name: お品書き
*/

?>

<?php get_header(); ?>

<main id="main" class="main">

    <?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): ?>
    <?php the_post(); ?>
    <article <?php post_class(); ?>>


        <div class="container">
            <div class="row">
                <h1 class="page-title">
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="row">
                <?php the_content(); ?>
            </div>
        </div>

    </article><!-- article end -->

    <?php endwhile; ?>
    <?php endif; ?>

    <div class="container py-5">
        <!-- 画像は本番時に彩度調整 -->
        <h2 class="py-5">看板メニュー</h2>
        <div class="row">
            <section class="order-2 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/2000x1500.png')); ?>" alt="">
            </section>
            <section class="menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="container-inner">
                    <h3>lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate ipsa fuga perspiciatis perferendis temporibus quia, laudantium ullam iste voluptatem pariatur </p>
                </div>
            </section>
        </div><!-- row end -->

        <h2 class="py-5">創作料理</h2>
        <div class="row">
            <section class="order-2 order-sm-1 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set6.JPG')); ?>" alt="">
            </section>
            <section class="order-1 order-sm-2 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="container-inner">
                    <h3>lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit reprehenderit accusantium,</p>
                </div>
            </section>
        </div><!-- row end -->

        <h2 class="py-5">福井の地酒</h2>
        <div class="row">
            <section class="menu-box order-2 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/2000x1500.png')); ?>" alt="">
            </section>
            <section class="menu-box order-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="container-inner">
                    <h3>lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, nam id eos libero. Exercitationem necessitatibus perspiciatis nulla impedit?</p>
                </div>
            </section>
        </div><!-- row end -->

        <h2 class="py-5">通常メニュー</h2>
        <div class="row">
            <section class="order-sm-1 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                <div class="container-inner pt-3">
                    <h3>盛り合わせ<br>1,600円</h3>
                    <p>握り８貫　または握り６貫、細巻き１本</p>
                </div>
            </section>
            <section class="order-sm-2 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set1.jpg')); ?>" alt="">
            </section>
            <section class="order-sm-4 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12 align-self-center">
                <div class="container-inner pt-3">
                    <h3>上握り<br>2,600円</h3>
                    <p>ウニ、イクラが入った握り８貫</p>
                </div>
            </section>
            <section class="order-sm-3 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set2.jpg')); ?>" alt="">
            </section>
        </div><!-- row1 end -->
        <div class="row">
            <section class="order-sm-1 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="container-inner pt-3">
                    <h3>特上握り<br>3,000円</h3>
                    <p>トロ、ウニ、イクラが入った握り８貫</p>
                </div>
            </section>
            <section class="order-sm-2 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set3.jpg')); ?>" alt="">
            </section>
            <section class="order-sm-4 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="container-inner pt-3">
                    <h3>ちらし<br>1,600円</h3>
                    <p>色とりどりの具材が盛りだくさん</p>
                </div>
            </section>
            <section class="order-sm-3 menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set4.jpg')); ?>" alt="">
            </section>
        </div><!-- row2 end -->
        <div class="row">
            <section class="menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="container-inner pt-3">
                    <h3>特巻<br>3,000円</h3>
                    <p>豪華な太巻、別名：大名巻き</p>
                </div>
            </section>
            <section class="menu-box col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set5.jpg')); ?>" alt="">
            </section>
        </div><!-- row3 end -->
        
        <p class="mt-5 font-weight-bold">注意</p>
        <ul class="menu-caution">
            <li>表示価格は全て税抜きです</li>
            <li>時価なので表示と違うことがあります</li>
            <li>市場からの新鮮な素材を使用しているため、その日によって違った素材が出ます</li>
        </ul>

    </div><!-- container end -->

</main><!-- main end -->

<?php get_footer(); ?>
