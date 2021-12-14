<?php get_header(); ?>

<main>
    <?php while ($wp_query->have_posts()) : the_post(); ?>
        <section class="agenda">
            <div class="wrapper agenda-conteudo">
                <a class="formulario-back" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-back.svg" alt=""></a>
                <div class="agenda-header">
                    <?php
                    $date = explode('/', get_field('data_de_inicio'));
                    $date = $date[0] . '/' . $date[1];

                    $startHour = get_field('hora_de_inicio');
                    $endHour = get_field('hora_de_termino');
                    $startHour = explode(':', $startHour)[0];
                    $endHour = explode(':', $endHour)[0];

                    $text = $startHour . "h às " . $endHour . "h";
                    ?>
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendar.svg" alt=""><?php echo $date ?></span>
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clock.svg" alt=""><?php echo $text; ?></span>
                </div>

                <article>
                    <h3><?php echo get_the_title(); ?></p>
                        <?php the_content(); ?>
                </article>
            </div>
        </section>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <section class="wrapper header-input">
        <h3 class="titulo titulo--azul">Eventos recentes</h3>
    </section>
    <?php
    $args = [
        'numberposts' => 3,
        'post_status' => 'publish',
        'post_type' => 'eventos',
        'exclude' => get_the_ID(),
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
    <section class="wrapper eventos-anteriores">
        <?php
        $postsId = [];
        foreach ($recent_posts as $events) :
        ?>
            <div class="eventos__card">
                <span class="eventos__date"><?php echo get_field('data_de_inicio', $events['ID']); ?></span>
                <h3><?php echo get_the_title($events['ID']); ?></p>
                <a href="<?php echo get_permalink($events['ID']); ?>">Veja mais detalhes</a>
            </div>
        <?php endforeach ?>
    </section>
</main>
<?php get_footer(); ?>