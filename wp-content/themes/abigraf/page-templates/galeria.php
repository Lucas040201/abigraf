<?php

/**
 * Template Name: Galeria
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper galeria">
        <?php
        if (have_rows('galeria')) :
            while (have_rows('galeria')) : the_row();
        ?>
                <div class="galeria-card">
                    <figure><img src="<?php echo get_sub_field('imagem_principal'); ?>" alt=""></figure>
                    <article>
                        <span class="galeria-card-date"><?php echo get_sub_field('data'); ?></span>
                        <hr>
                        <p class="galeria-card-texto"><?php echo get_sub_field('titulo'); ?></p>
                        <span class="galeria-card-link button">Ver álbum</span>
                    </article>
                    <div class="modal">
                        <span class="modal-close"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt=""></span>
                        <h3><?php echo get_sub_field('subtitulo_modal'); ?></h3>
                        <div class="modal-slider">
                            <?php
                            $images = get_sub_field('galeria_slider');
                            $counter = 1;
                            if ($images) : ?>
                                <?php foreach ($images as $image) : ?>
                                    <img src="<?php echo esc_url($image); ?>" alt="" data-item="<?php echo $counter++; ?>" />
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="modal-paginacao">
                            <span class="modal-paginacao-item--active">01</span><span class="modal-paginacao-item">/04</span>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>