<?php

/**
 * Template Name: Eventos
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper eventos">
        <h3 class="titulo">Próximos eventos</h3>
        <?php
        $args = [
            'numberposts' => 3,
            'post_status' => 'publish',
            'post_type' => 'eventos',
            'meta_query' => [
                [
                    'key' => 'data_de_inicio',
                    'value' => date('Ymd'),
                    'type' => 'DATE',
                    'compare' => '>=',
                ]
            ]
        ];

        $recent_posts = wp_get_recent_posts($args);
        ?>
        <div class="eventos__card">
            <?php
            $postsId = [];
            foreach ($recent_posts as $events) :
                $postsId[] = $events['ID'];
                $date = explode('/', get_field('data_de_inicio', $events['ID']));
                $date = $date[0] . '/' . $date[1];
            ?>
                <div class="eventos__card">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendar.svg" alt=""><?php echo $date; ?></span>
                    <h4><?php echo get_the_title($events['ID']); ?></h4>
                    <p><?php echo get_the_excerpt($events['ID']); ?></p>
                    <a class="button" href="<?php echo get_permalink($events['ID']) ?>">Veja mais detalhes</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    <section class="wrapper eventos-anteriores">
        <div class="titulo-data">
            <h3 class="titulo titulo--azul">Eventos Anteriores</h3>
            <label>
                <select name="" id="">
                    <option value="" selected>Todos os anos</option>
                </select>
            </label>
        </div>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = [
            'post_type' => 'eventos',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged,
            'meta_query' => [
                'relation' => 'OR',
                [
                    'relation' => 'AND',
                    [
                        'key' => 'data_de_inicio',
                        'value' => date('Ymd'),
                        'type' => 'DATE',
                        'compare' => '<',
                    ],
                    [
                        'key' => 'data_de_termino',
                        'value' => date('Ymd'),
                        'type' => 'DATE',
                        'compare' => '<',
                    ]
                ],
                [
                    'relation' => 'AND',
                    [
                        'key' => 'data_de_inicio',
                        'value' => date('Ymd'),
                        'type' => 'DATE',
                        'compare' => '<',
                    ],
                    [
                        'key' => 'data_de_termino',
                        'value' => date('Ymd'),
                        'type' => 'DATE',
                        'compare' => '>=',
                    ]
                ],

            ]
        ];

        if (!empty($_GET['ano'])) {
            $args['date_query'] = [
                'year' => $_GET['ano']
            ];
        }
        $wp_query = new WP_Query($args);

        if ($wp_query->have_posts()) :
            while ($wp_query->have_posts()) : the_post();
                $startDate = get_field('data_de_inicio');
                $endDate = get_field('data_de_termino');
                $date = formatedDate($startDate);
                // if (!get_field('evento_de_dia_unico')) $date = formatedDate($startDate) . ' a ' . formatedDate($endDate);

        ?>
                <div class="noticias__card">
                    <span class="noticias__category"><?php echo $date ?></span>
                    <h3><?php echo get_the_title(); ?></h3>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <a href="<?php echo get_permalink(); ?>">Veja mais detalhes</a>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
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
    </section>

</main>
</main>
<?php get_footer(); ?>