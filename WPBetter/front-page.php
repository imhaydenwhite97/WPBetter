<?php get_template_part('template-parts/header/custom-header'); ?>

<main class="site-main front-page">
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to WPBetter</h1>
            <p>Your custom WordPress development solution</p>
        </div>
    </section>

    <section class="featured-content">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
