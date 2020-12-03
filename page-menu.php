<?php

/*
Template Name: お品書き
*/

?>

<?php get_header(); ?>

<main id="main" class="main menu-back">
    <div class="container">
        <div class="grid-box8">
            <div class="box-item box-item1 col2-md-box">
                <h2 class="menu-title">寿司メニュー</h2>
            </div>
            <div class="box-item box-item2">
                <h3 class="">盛り合わせ<br>1,800円</h3>
                <p class="font-weight-bold">握り８貫　または　握り６貫と細巻き１本</p>
                <p class="">その日のおすすめの季節ネタが入った、満足の握り</p>
            </div>
            <div class="box-item box-item3">
                <a data-fancybox="menu-gallery" href="<?php echo esc_url(get_theme_file_uri('images/nigiri1-2.jpg')); ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/nigiri1.jpg')); ?>" alt="">
                </a>
            </div>
            <div class="box-item box-item4">
                <h3 class="">上にぎり<br>2,800円</h3>
                <p class="font-weight-bold">握り８貫</p>
                <p class="">イクラとウニが入った、豪華な握り。</p>
            </div>
            <div class="box-item box-item5">
                <a data-fancybox="menu-gallery" href="<?php echo esc_url(get_theme_file_uri('images/nigiri2-2.jpg')); ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/nigiri2.jpg')); ?>" alt="">
                </a>

            </div>
            <div class="box-item box-item6">
                <h3 class="">特上にぎり<br>3,500円</h3>
                <p class="font-weight-bold">握り８貫</p>
                <p class="">トロとイクラ、ウニが入った、至福の握り</p>
            </div>
            <div class="box-item box-item7">
                <a href="<?php echo esc_url(get_theme_file_uri('images/nigiri3-2.jpg')); ?>" data-fancybox="menu-gallery">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/nigiri3.jpg')); ?>" alt="">
                </a>
            </div>
            <div class="box-item box-item8">
                <h3 class="">ちらし<br>1,800円</h3>
                <p class="">季節のネタがぎっしりと入った、ちらし寿司はどこから食べようか迷うほど</p>
            </div>
            <div class="box-item box-item9">
                <a href="<?php echo esc_url(get_theme_file_uri('images/chirashi-2.jpg')); ?>" data-fancybox="menu-gallery">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/chirashi.jpg')); ?>" alt="">
                </a>
            </div>
            <div class="box-item box-item10">
                <h3 class="">特巻<br>3,500円</h3>
                <p class="">８種類のネタが入った、迫力の巻き寿司。</p>
            </div>
            <div class="box-item box-item11">
                <a href="<?php echo esc_url(get_theme_file_uri('images/futomaki-2.jpg')); ?>" data-fancybox="menu-gallery">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/futomaki.jpg')); ?>" alt="">
                </a>

            </div>
        </div><!-- grid-box8 end -->
        <div class="flex-box nigiri">
            <h2 class="menu-title">握り寿司</h2>
            <div class="box-item box-item1">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi1.JPG')); ?>" alt="甘エビ｜〆鯖">
            </div>
            <div class="box-item box-item2">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi2.JPG')); ?>" alt="中トロ｜カジキ">
            </div>
            <div class="box-item box-item3">
                <img src="<?php echo esc_url(get_theme_file_uri('images/sushi3.JPG')); ?>" alt="マグロ赤身｜マグロトロ">
            </div>
            <div class="box-item box-item4">
                <div class="button"><a href="<?php echo esc_url(home_url('menu/nigiri')); ?>">握り寿司<br>いろいろ</a></div>
            </div>
        </div><!-- nigiri end -->

        <div class="flex-box ippin">
            <h2 class="menu-title">一品料理</h2>
            <div class="box-item box-item1">
                <p class="menu-p">定番の茶碗むしや出汁巻玉子、天ぷらなどの他に、旬の魚の焼物や煮付など、いろいろなお料理があります。</p>
            </div>
            <div class="box-item box-item2">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin1.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item3">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin2.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item4">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin3.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item5">
                <div class="button"><a href="<?php echo esc_url(home_url('ippin'));  ?>">料理いろいろ</a></div>
            </div>
        </div>

        <div class="flex-box seasons">
            <h2 class="menu-title">季節料理</h2>
            <div class="box-item box-item1">
                <p class="menu-p">春は山菜や筍料理、夏は鱧料理や土用の丑の日の鰻、秋は松茸を使った香り高いお料理など、冬は福井が全国に誇る越前蟹、河豚やあんこうなどの鍋料理。2月の節分の日の恵方巻。季節を楽しむお料理があります。</p>
            </div>
            <div class="box-item box-item2">
                <img src="<?php echo esc_url(get_theme_file_uri('images/season-spring1.JPG')); ?>" alt="">
                <p>季節.春</p>
            </div>
            <div class="box-item box-item3">
                <img src="<?php echo esc_url(get_theme_file_uri('images/season-sammer1.JPG')); ?>" alt="">
                <p>季節.夏</p>
            </div>
            <div class="box-item box-item4">
                <img src="<?php echo esc_url(get_theme_file_uri('images/season-winter1.JPG')); ?>" alt="">
                <p>季節.冬</p>
            </div>
            <div class="box-item box-item5">
                <img src="<?php echo esc_url(get_theme_file_uri('images/season-winter2.JPG')); ?>" alt="">
                <p>季節.冬</p>
            </div>
            <div class="box-item box-item6">
                <img src="<?php echo esc_url(get_theme_file_uri('images/season-winter3.JPG')); ?>" alt="">
                <p>季節.冬</p>
            </div>
            <div class="box-item box-item7">
                <img src="<?php echo esc_url(get_theme_file_uri('images/season-winter4.JPG')); ?>" alt="">
                <p>季節.冬</p>
            </div>
            <div class="box-item box-item8">
                <img src="<?php echo esc_url(get_theme_file_uri('images/season-spring2.JPG')); ?>" alt="">
                <p>季節.節分</p>
            </div>
            <div class="box-item box-item9">
                <p class="menu-p">
                    要予約<br>仕入れ、下処理の都合上、２、３日前のご予約をお願い致します。天候により漁ができないときは入荷見込み出来ない時があります。事前にお問い合わせ下さい。
                </p>
            </div>

        </div>

        <h2 class="menu-title">福井の地酒</h2>
        <div class="flex-box local-liquor">
            <p class="menu-p">春のフレッシュな「しぼりたて」<br>夏の「生酒」<br>秋の「ひやおろし」など<br>季節によって美味しい<br class="d-md-none">お酒をご用意しております。</p>


            <div class="text-center mt-5">
                <img src="<?php echo esc_url(get_theme_file_uri('images/nihonshu.jpg')); ?>" alt="">
            </div>

            <div class="box-item">
                <h2 class="mt-5 pl-sm-5 font-weight-bold">注意</h2>
                <ul class="pl-sm-5 menu-caution">
                    <li>表示価格は全て税抜きです</li>
                    <li>市場からの新鮮な素材を使用しているため、その日によって違った素材が出ます</li>
                </ul>
            </div>
        </div>
    </div><!-- container end -->
    <?php get_template_part('component/map'); ?>
</main><!-- main end -->

<?php get_footer(); ?>
