<?php
/* Template Name: 一品料理 */
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
                &nbsp;季節によって入荷する魚や食材が変わります。気軽にお問い合わせください。
            </p>
        </div>
        <div class="grid-box menu-view">
            <div class="box-item box-item1">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin1.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item2">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin2.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item3">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin3.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item4">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin4.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item5">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin5.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item6">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin6.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item7">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin7.JPG')); ?>" alt="">
            </div>
            <div class="box-item box-item8">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ippin8.JPG')); ?>" alt="">
            </div>
            
        </div>
        <div class="flex-box button-wrap">
            <div class="button"><a href="<?php echo esc_url( home_url('menu') ) ?>">戻る</a></div>
        </div>

        <div class="">
            <?php the_content(); ?>
        </div>
        </div>
    </article><!-- article end -->

    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
