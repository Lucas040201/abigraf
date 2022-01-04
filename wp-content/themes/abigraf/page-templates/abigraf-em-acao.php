<?php

/**
 * Template Name: Abigraf em Ação
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper titulo-data">
        <h3 class="titulo">Nossas edições - Abigraf em Ação</h3>
        <!-- <form action="#" method="GET"> -->
            <label>
                <select name="ano" id="select"  onchange="this.form.submit()">
                    <option value="" selected>Todos os anos</option>
                    <option value="2021">2021</option>
                </select>
            </label>
        <!-- </form> -->
    </section>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'em_acao',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'order' => 'DESC',
        'orderby' => 'date',
        'paged' => $paged
    ];

    if (!empty($_GET['ano'])) {
        $args['date_query'] = [
            'year' => $_GET['ano']
        ];
    }
    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
    ?>
        <section class="wrapper noticias">
            <?php
            while ($wp_query->have_posts()) : the_post();
                $date = get_the_date('d/F/Y');

                $date = explode('/', $date);

                $dateFormated = "$date[0] de $date[1] de $date[2]";
                $category = get_the_category(get_the_ID());
                $category = (count($category))? $category[0]->name: '';
            ?>
                <div class="noticias__card">
                    <span class="noticias__date"><?php echo $dateFormated; ?></span>
                    <span class="noticias__category"><?php echo $category; ?></span>
                    <h3><?php echo get_the_title(); ?></h3>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <a href="<?php echo get_permalink(); ?>">Leia mais</a>
                </div>
            <?php
             endwhile; 
             wp_reset_postdata();
            ?>
        </section>
        <?php
            /**
             * @todo arrumar css de paginacao
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
        </div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>