<?php

/**
 * Template Name: Template Sobre
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
$estado = get_field('estado')['label'];
?>
<main>
    <section class="wrapper sobre">
        <h3 class="titulo"><?php echo "Abigraf $estado";?></h3>

        <article>
            <?php the_content(); ?>
        </article>
    </section>

</main>

<?php get_footer(); ?>