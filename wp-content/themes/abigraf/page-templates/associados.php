<?php

/**
 * Template Name: Associados
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper associados">
        <div class="associados__container">
            <?php
            if (have_rows('associados')) :
                while (have_rows('associados')) : the_row();
            ?>
                    <a href="<?php echo get_sub_field('link_do_associado'); ?>" target="_blank">
                        <img src="<?php echo get_sub_field('imagem_do_associado'); ?>" alt="">
                    </a>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>