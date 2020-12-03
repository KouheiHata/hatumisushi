<?php
/* Template Name: 握り寿司 */
get_header(); ?>

<main id="main" class="main">
    <div class="container l-container">

            
    <?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): ?>
    <?php the_post(); ?>
    <article <?php post_class(); ?>>
        <div class="row">
        <div class="col-12">
            <h1 title="black">
            <?php the_title(); ?>
            </h1>
            <p description="menu">
                &nbsp;季節によって入荷する魚が変わります。気軽にお問い合わせください。
            </p>
        </div>
        <div class="grid-box menu-view">
            <div class="box-item box-item1">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi1.JPG')); ?>" alt="">
                <p>甘エビ｜〆鯖</p>
            </div>
            <div class="box-item box-item2">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi2.JPG')); ?>" alt="">
                <p>中トロ｜カジキ</p>
            </div>
            <div class="box-item box-item3">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi3.JPG')); ?>" alt="">
                <p>マグロ赤身｜マグロ</p>
            </div>
            <div class="box-item box-item4">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi4.JPG')); ?>" alt="">
                <p>真アジ｜コハダ</p>
            </div>
            <div class="box-item box-item5">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi5.JPG')); ?>" alt="">
                <p>岩牡蠣｜玉子</p>
            </div>
            <div class="box-item box-item6">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi6.JPG')); ?>" alt="">
                <p>生湯葉｜鱈の白子</p>
            </div>
            <div class="box-item box-item7">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi7.JPG')); ?>" alt="">
                <p>ウナギ｜アナゴ</p>
            </div>
            <div class="box-item box-item8">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi8.JPG')); ?>" alt="">
                <p>イクラ｜ウニ</p>
            </div>
            <div class="box-item box-item9">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi9.JPG')); ?>" alt="">
                <p>福井サーモン｜カニ</p>
            </div>
            <div class="box-item box-item10">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi10.JPG')); ?>" alt="">
                <p>サヨリ｜キンメダイ</p>
            </div>
            <div class="box-item box-item11">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi11.JPG')); ?>" alt="">
                <p>生ゲソ｜カワハギ</p>
            </div>
            <div class="box-item box-item12">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi12.JPG')); ?>" alt="">
                <p>かずの子｜ヒメ鯛</p>
            </div>
            <div class="box-item box-item13">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi13.JPG')); ?>" alt="">
                <p>ヒラメ｜赤カレイ</p>
            </div>
            <div class="box-item box-item14">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi14.JPG')); ?>" alt="">
                <p>鮎酢〆｜トリガイ</p>
            </div>
            <div class="box-item box-item15">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi15.JPG')); ?>" alt="">
                <p>スジガツオ｜クエ</p>
            </div>
            <div class="box-item box-item16">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi16.JPG')); ?>" alt="">
                <p>イカ｜カンパチ腹身</p>
            </div>
            <div class="box-item box-item17">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi17.JPG')); ?>" alt="">
                <p>イワシ｜サンマ</p>
            </div>
            <div class="box-item box-item18">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi18.JPG')); ?>" alt="">
                <p>スズキ｜甘鯛昆布〆</p>
            </div>
            <div class="box-item box-item19">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi19.JPG')); ?>" alt="">
                <p>鉄火巻き｜真鯛</p>
            </div>
            <div class="box-item box-item20">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi20.JPG')); ?>" alt="">
                <p>寒ブリ｜キス</p>
            </div>
            <div class="box-item box-item21">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi21.JPG')); ?>" alt="">
                <p>タイラギガイ｜カマス炙り</p>
            </div>
        </div>

        <div class="flex-box button-wrap">
            <div class="button"><a href="<?php echo esc_url( home_url('menu') ) ?>">戻る</a></div>
        </div>
        </div>
    </article><!-- article end -->

    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
