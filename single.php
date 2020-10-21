<?php get_header(); ?>

<div class="container single-content pt-5">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <div class="row">

            <h3 class="mb-3 col-xl-6 col-lg-6 col-md-6"><?php the_title(); ?></a></h3>
            <p class="col-xl-6 col-lg-6 mb-3"><?php the_time('Y年m月d日(l)'); ?></p>
            <div class="mb-5 col-xl-6 col-lg-6 text-center"><?php the_post_thumbnail('large'); ?></div>
            <div class="mb-5 col-xl-9 col-lg-9"><?php the_content(); //本文 ?></div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
                <span><?php the_category('&nbsp;'); ?></span>
                <span><?php the_tags('&nbsp;'); ?></span>
            </div>
        </div>
    </article>
    <?php endwhile; //投稿ループ終了 ?>
    <?php endif; //条件分岐終了 ?>
</div>

<?php get_footer(); ?>
