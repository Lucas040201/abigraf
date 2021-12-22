<?php

/**
 * Template Name: Missao Valores
 * Template Post Type: page
 * @since 1.0.0
 */
get_header();
?>
<aside>
    <h2>Missão e Valores</h2>
</aside>
<main>
    <section class="wrapper cards cards--nolink">
        <?php
        if (have_rows('cards')) :
            while (have_rows('cards')) : the_row();
        ?>
                <div class="cards__item">
                    <div class="cards__icon">
                        <img src="<?php echo get_sub_field('icone_do_card'); ?>" alt="">
                        <span><?php echo get_sub_field('titulo_do_card'); ?></span>
                    </div>
                    <article style="background-image: url(<?php echo get_sub_field('imagem_de_fundo'); ?>">
                        <p><?php echo get_sub_field('texto_do_card'); ?></p>
                    </article>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </section>
    <section class="faixa-amarela faixa-amarela--objetivos">
        <div class="wrapper">
            <h3 class="titulo">Objetivos</h3>
            <article>
                <?php echo get_field('textos'); ?>
            </article>
        </div>
    </section>
    <section class="wrapper acoes">
        <img src="<?php echo get_field('imagem_desktop'); ?>" alt="">
        <article>
            <h3 class="titulo titulo--azul">Ações Estratégicas</h3>
            <?php echo get_field('textos_mobile'); ?>
        </article>
    </section>
</main>

<?php
get_footer();
?>