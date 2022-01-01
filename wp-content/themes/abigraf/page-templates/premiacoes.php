<?php

/**
 * Template Name: Premiações
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper premios">
        <h3 class="titulo">Qualidade Gráfica <br> Premiada do Sul ao Nordeste</h3>
        <article class="conteudo-texto">
            <p><?php echo get_field('texto_acima_das_fotos'); ?></p>
        </article>
        <?php if(have_rows('fotos')): ?>
        <div class="imagem-grid">
            <?php while(have_rows('fotos')): the_row(); ?>
            <img src="<?php echo get_sub_field('imagem'); ?>" alt="">
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </section>
    <section class="wrapper regionais-home">
        <div class="regionais-home__text">
            <h3 class="titulo titulo--azul">Premiações</h3>
            <p><?php echo get_field('texto_premiacoes'); ?></p>
            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mapa-gps.svg" alt="">Navegue no mapa e saiba mais</span>
        </div>
        <?php get_template_part('template-parts/components/mapas'); ?>
    </section>

</main>
<?php get_footer(); ?>