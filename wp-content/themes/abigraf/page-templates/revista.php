<?php

/**
 * Template Name: Revista
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper revista">
        <h3 class="titulo">Nossas edições</h3>
        <article>
            <?php the_title(); ?>
        </article>
        <?php echo get_field('e_mail'); ?>
        <?php echo get_field('telefone_da_esquerda'); ?>
        <?php echo get_field('telefone_da_direita'); ?>
        <?php echo get_field('imagem_da_divisoria'); ?>
        <?php
        $args = array(
            'post_type' => 'revistas',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'orderby' => 'title',
            'order' => 'ASC',
        );

        $wp_query = new WP_Query($args);

        if ($wp_query->have_posts()) :

        ?>
            <div class="revista__container">
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="revista__card">
                        <img src="<?php echo get_field('imagem'); ?>" alt="">
                        <span><?php echo get_field('data');?></span>
                        <hr>
                        <h4><?php echo get_the_title(); ?></h4>
                        <?php echo get_field('arquivo');?>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
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
    </section>
</main>

<?php get_footer(); ?>