<?php

/**
 * Template Name: Apresentações
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper apresentacoes">
        <h3 class="titulo">Arquivos</h3>
        <?php
        $args = array(
            'post_type' => 'apresentacoes',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'orderby' => 'title',
            'order' => 'ASC',
        );

        $wp_query = new WP_Query($args);

        if ($wp_query->have_posts()) :
        ?>
            <div class="apresentacoes__container">
                <?php while ($wp_query->have_posts()) : the_post(); ?>
                    <div class="apresentacoes__card">
                        <span><?php echo get_field('data'); ?></span>
                        <h4><?php echo get_the_title(); ?></h4>
                        <a class="button" href="<?php echo get_field('arquivo_apresentacao');?>" target="_blank" rel="noopener noreferrer">Baixe aqui</a>
                    </div>
                <?php endwhile; ?>
            </div>

            <?php
               /**
                * @todo Ajustar css da paginação
                */
            ?>
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
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>