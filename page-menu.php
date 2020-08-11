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
                <div class="container-inner">
                    <h1 class="page-title">
                        <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    </article><!-- article end -->

    <?php endwhile; ?>
    <?php endif; ?>

    <div class="container py-5">
        <div class="row">
            <section class="order-md-1 menu-box col-lg-3 col-md-6 col-sm-6 col-xs-12 align-self-center">
                <div class="container-inner pt-3">
                    <h3>盛り合わせ<br>1,600円</h3>
                    <p>握り８貫　または握り６貫、細巻き１本</p>
                </div>
            </section>
            <section class="order-md-2 menu-box col-lg-3 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set1.jpg')); ?>" alt="">
            </section>
            <section class="order-lg-3 order-md-4 menu-box col-lg-3 col-md-6 col-sm-6 col-xs-12 align-self-center">
                <div class="container-inner">
                    <h3>上握り<br>2,600円</h3>
                    <p>ウニ、イクラが入った握り８貫</p>
                </div>
            </section>
            <section class="order-lg-4 order-md-3 menu-box col-lg-3 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set2.jpg')); ?>" alt="">
            </section>
        </div><!-- row1 end -->
        <div class="row">
            <section class="order-lg-2 menu-box col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="container-inner">
                    <h3>特上握り<br>3,000円</h3>
                    <p>トロ、ウニ、イクラが入った握り８貫</p>
                </div>
            </section>
            <section class="order-lg-1 menu-box col-lg-3 col-md-6 col-sm-12 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set3.jpg')); ?>" alt="">
            </section>
            <section class="order-lg-4 order-sm-4 menu-box col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="container-inner">
                    <h3>ちらし<br>1,600円</h3>
                    <p>色とりどりの具材が盛りだくさん</p>
                </div>
            </section>
            <section class="order-lg-3 order-sm-3 menu-box col-lg-3 col-md-6 col-sm-12 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set4.jpg')); ?>" alt="">
            </section>
        </div><!-- row2 end -->
        <div class="row">
            <section class="menu-box col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="container-inner">
                    <h3>特巻<br>3,000円</h3>
                    <p>豪華な太巻、別名：大名巻き</p>
                </div>
            </section>
            <section class="menu-box col-lg-3 col-md-6 col-sm-6 col-xs-12 p-0">
                <img src="<?php echo esc_url(get_theme_file_uri('images/set5.jpg')); ?>" alt="">
            </section>
        </div><!-- row3 end -->
    </div>

</main><!-- main end -->

<?php get_footer(); ?>
