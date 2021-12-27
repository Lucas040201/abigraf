<?php

/**
 * Template Name: Premiações Interna
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
$estado = get_field('estado');
?>
<main>
    <section class="wrapper premios-interna">
        <div class="premios-interna__title">
            <h3 class="titulo"><?php echo $estado['label']; ?></h3>
            <a href="javascript: history.go(-1)"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/backarrow.svg" alt=""></a>
        </div>
        <div class="premios-interna__header">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <h4><?php echo get_the_title(); ?></h4>
        </div>
        <article class="conteudo-texto">
            <?php the_content(); ?>
        </article>
    </section>
    <?php if (have_rows('icones')) : ?>
        <section class="faixa-amarela faixa-amarela--premios">
            <div class="wrapper">
                <h3 class="titulo"><?php echo get_field('titulo_dos_icones'); ?></h3>
                <?php while (have_rows('icones')) : the_row(); ?>
                    <div class="faixa-amarela__card">
                        <span><?php echo get_sub_field('titulo'); ?></span>
                        <img src="<?php echo get_sub_field('imagem'); ?>" alt="">
                        <strong><?php echo get_sub_field('numero'); ?></strong>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php
    endif;
    if (have_rows('textos')) :
    ?>
        <section class="wrapper premios__conteudo">
            <?php while (have_rows('textos')) : the_row(); ?>
                <article>
                    <span><?php echo get_sub_field('titulo'); ?></span>
                    <?php echo get_sub_field('textos'); ?>
                </article>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>