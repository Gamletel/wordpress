<?php
/*
 * Template Name: Главная страница
 */
the_post();
get_header();

?>
    <main id="main" class="front-page">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </main>
<?php get_footer(); ?>