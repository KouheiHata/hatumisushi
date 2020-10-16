<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="row">
    <article <?php post_class(); ?>>
       <div>
           <a href="<?php the_permalink(); ?>"></a>
       </div>
       <?php the_title(); ?>
       <?php  the_excerpt(); ?>
        
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>