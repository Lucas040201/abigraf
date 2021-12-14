<?php

/**
 * Template Name: Diretoria
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper diretoria">
        <?php
        /**
         * @todo Mudar acf dos textos
         */

        if (have_rows('itens')) :
            while (have_rows('itens')) : the_row();
        ?>
                <h3 class="titulo"><?php echo get_sub_field('titulo'); ?></h3>
                <div class="diretoria__container">
                    <div class="diretoria__card">
                        <h4><?php echo get_sub_field('titulo_esquerdo'); ?></h4>
                        <?php
                        if (have_rows('textos')) :
                            while (have_rows('textos')) : the_row();
                        ?>
                                <article>
                                    <?php
                                    echo get_sub_field('texto');
                                    $cargo = get_sub_field('cargo');
                                    if (!empty($cargo)) {
                                        echo "<span>$cargo</span>";
                                    }
                                    ?>
                                </article>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="diretoria__card">
                        <h4><?php echo get_sub_field('titulo_direito'); ?></h4>
                        <?php
                        if (have_rows('textos_direito')) :
                            while (have_rows('textos_direito')) : the_row();
                        ?>
                                <article>
                                    <?php
                                    echo get_sub_field('texto');
                                    $cargo = get_sub_field('cargo');
                                    if (!empty($cargo)) {
                                        echo "<span>$cargo</span>";
                                    }
                                    ?>
                                </article>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>