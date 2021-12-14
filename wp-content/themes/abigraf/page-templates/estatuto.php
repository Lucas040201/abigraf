<?php

/**
 * Template Name: Estatuto
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper estatuto">
        <h3 class="titulo"><?php echo get_the_title(); ?></h3>

        <article>
            <?php the_content(); ?>
        </article>

        <a class="estatuto__link" href="<?php echo get_field('arquivo')?>" target="_blank" rel="noopener noreferrer" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <span>Baixe aqui o <strong>Estatuto da Assossiação</strong></span>
        </a>
    </section>
</main>
<?php get_footer(); ?>