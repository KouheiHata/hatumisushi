<?php get_header(); ?>

<div class="container single-content pt-5">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <div class="row">

            <h1 class="menu-detail-title"><?php the_title(); ?></h1>
            <p class="col-7 menu-detail-p">
                &nbsp;季節によって入荷する魚が変わります。気軽にお問い合わせください。
            </p>
            <p class="col-3"></p>
            
            <div class="mb-5 col-xl-12 col-lg-12"><?php the_content(); //本文 ?><?php wp_link_pages(); ?></div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
<!--
                <span><?php the_category('&nbsp;'); ?></span>
                <span><?php the_tags('&nbsp;'); ?></span>
-->
            </div>
        </div>
    </article>
    <?php endwhile; //投稿ループ終了 ?>    
    <?php endif; //条件分岐終了 ?>
</div>

<?php get_footer(); ?>
