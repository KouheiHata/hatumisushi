<?php get_header(); ?>

<div class="container">
   <h1 class="mt-5">Blog</h1>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="blog-content">
        <article <?php post_class(); ?>>
            <h3 class="">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <div class="article-image">
                <a href="<?php the_permalink(); ?>">
                    <?php echo the_post_thumbnail('medium'); ?>
                </a>
            </div>
            <div class="clear"></div>
            <?php the_excerpt(); ?>
        </article>
        <footer class="blog-article-footer">
            <span class="category"><?php the_category('&nbsp;'); ?></span>
        <span class="tags"><?php the_tags('&nbsp;'); ?></span>
        </footer>
    </div>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
