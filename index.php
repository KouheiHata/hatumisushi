<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="blog-content">
    <article <?php post_class(); ?>>
        <h3 class="">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <div class="article-image">
               <?php echo the_post_thumbnail('medium'); ?>
        </div>
        <div class="clear"></div>
        <?php  the_excerpt(); ?>

    </article>
    </div>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
