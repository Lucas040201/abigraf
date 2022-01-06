<?php

/**
 * Template Name: Relatorio de Atividade
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper revista">
        <h3 class="titulo">Nossas edições - Relatório de Atividade</h3>
        <article>
            <?php the_content(); ?>
        </article>
    </section>
    <section class="faixa-cinza">
        <div class="wrapper">
            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/envelope.svg" alt=""><a href="mailto:<?php echo get_field('e_mail'); ?>"><?php echo get_field('e_mail'); ?></a></span>
            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ligacao.svg" alt="">(11) <?php echo get_field('telefone_da_esquerda'); ?> / <?php echo get_field('telefone_da_direita'); ?></span>
            <img src="<?php echo get_field('imagem_da_divisoria'); ?>" alt="">
        </div>
    </section>



    <?php
    $args = array(
        'post_type' => 'atividade',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :

    ?>
        <section class="wrapper revista__container">
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <article>
                    <img src="<?php echo get_field('imagem'); ?>" alt="">
                    <span><?php echo get_field('data'); ?></span>
                    <hr>
                    <h4><?php echo get_the_title(); ?></h4>
                    <a class="button" href="<?php echo get_field('arquivo'); ?>" target="_blank">Visualizar</a>
                </article>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </section>
        <div class="paginacao">
            <div class="paginacao-numeros">
                <?php
                $big = 999999999;
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => '<span class="paginacao-before"><img src="' . get_template_directory_uri() . '/assets/images/icons/arrow-paginacao.svg" alt=""></span>',
                    'next_text' => '<span class="paginacao-after"><img src="' . get_template_directory_uri() . '/assets/images/icons/arrow-paginacao.svg" alt=""></span>',
                ));
                ?>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>