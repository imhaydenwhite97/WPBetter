<?php get_header(); ?>
<main>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/content'); ?>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
