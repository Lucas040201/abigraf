<?php

/**
 * Template Name: Carta Aberta
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper carta">
        <h3 class="titulo"><?php echo get_the_title(); ?></h3>

        <div class="carta__container">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <article>
                <?php the_content(); ?>
            </article>
        </div>
    </section>
</main>
<?php get_footer(); ?>