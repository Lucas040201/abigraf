<?php get_header(); ?>

<main>

    <?php while ($wp_query->have_posts()) : the_post(); ?>
        <section class="eventos eventos--interna">
            <div class="wrapper">
                <div class="eventos__header">
                    <?php
                    $date = explode('/', get_field('data_de_inicio'));
                    $date = $date[0] . '/' . $date[1];

                    $startHour = get_field('hora_de_inicio');
                    $endHour = get_field('hora_de_termino');
                    $startHour = explode(':', $startHour)[0];
                    $endHour = explode(':', $endHour)[0];

                    $text = $startHour . "h às " . $endHour . "h";
                    ?>
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendar.svg" alt=""><?php echo $date; ?></span>
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clock.svg" alt=""><?php echo $text; ?></span>
                    <a href="javascript: history.go(-1)"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/backarrow.svg" alt=""></a>

                    <article>
                        <h4><?php echo get_the_title(); ?></h4>
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </section>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>



    <section class="wrapper eventos-anteriores">
        <div class="titulo-data">
            <h3 class="titulo titulo--azul">Eventos Recentes</h3>
        </div>
        <?php
        $args = [
            'post_type' => 'eventos',
            'post_status' => 'publish',
            'posts_per_page' => 2,
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged,
            'post__not_in' => [get_the_ID()],
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
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) :
            while ($wp_query->have_posts()) : the_post();
                $startDate = get_field('data_de_inicio');
                $endDate = get_field('data_de_termino');
        ?>
                <div class="noticias__card">
                    <span class="noticias__category"><?php echo formatedDate($startDate); ?></span>
                    <h3><?php echo get_the_title(); ?></h3>
                    <p><?php

                        if ($endDate < date('d/m/Y')) {
                            echo 'Evento encerrado';
                        } else {
                            echo 'Inscrições encerradas';
                        }

                        ?></p>
                    <a href="<?php echo get_permalink(); ?>">Veja mais detalhes</a>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </section>
</main>
<?php get_footer(); ?>