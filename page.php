<?php get_header(); ?>

<main id="main" class="main">
    
    <?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): ?>
    <?php the_post(); ?>
    <article <?php post_class(); ?>>

        <h1 class="">
            <?php the_title(); ?>
        </h1>
        <div class="">
            <?php the_content(); ?>
        </div>

    </article><!-- article end -->

    <?php endwhile; ?>
    <?php endif; ?>
    
</main>

<?php get_footer(); ?>
