<?php

/**
 * Template Name: Template Galeria Presidentes
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');

?>
<main>
    <section class="wrapper galeria-presidentes-box">
    <?php
        if( have_rows('presidentes') ):
            while( have_rows('presidentes') ) : the_row();
            ?>
            <div class="galeria-presidentes__card">
                <img src="<?php echo get_sub_field('foto'); ?>" alt="">
                <span><?php echo get_sub_field('data'); ?></span>
                <hr>
                <h3><?php echo get_sub_field('nome'); ?></h3>
                <p><?php echo get_sub_field('cargo'); ?></p>
            </div>
            <?php
            endwhile;
        endif;
    ?>
    </section>
</main>

<?php get_footer(); ?>