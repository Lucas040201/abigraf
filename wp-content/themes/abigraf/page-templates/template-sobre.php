<?php

/**
 * Template Name: Template Sobre
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper sobre">
        <h3 class="titulo"><?php echo get_the_title(); ?></h3>

        <article>
            <?php the_content(); ?>
        </article>
    </section>

</main>

<?php get_footer(); ?>