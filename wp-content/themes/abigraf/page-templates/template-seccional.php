<?php

/**
 * Template Name: Template Seccional
 * Template Post Type: page
 * @since 1.0.0
 */

get_header('seccional');
// get_template_part('template-parts/components/content-aside');
?>
<main class="template-home">
    <?php

    $estado = get_field('estado');

    ?>
    <style>
        .main-slider::after {
            content: '<?php echo $estado['label']; ?>';
        }
    </style>
    <?php if (have_rows('slider')) : ?>
        <section class="wrapper main-slider">
            <?php while (have_rows('slider')) : the_row(); ?>
                <a href="<?php echo get_sub_field('link'); ?>" target="_blank">
                    <img class="slider-item" src="<?php echo get_sub_field('imagem'); ?>" alt="">
                </a>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
    <section class="wrapper regionais-home">
        <div class="regionais-home__text">
            <h3 class="titulo">Abigraf <?php echo $estado['label']; ?></h3>
            <p><?php echo get_field('texto_de_abertura'); ?></p>
            <a class="button" href="<?php echo get_field('link'); ?>">Conheça</a>
        </div>
        <!-- <map>
        </map> -->
        <?php get_template_part('template-parts/components/mapas'); ?>
    </section>
    <section class="wrapper">
        <div class="linknews-home">
            <div class="aside">
                <h4 class="titulo">Eventos</h4>
                <?php
                $args = [
                    'numberposts' => 2,
                    'post_status' => 'publish',
                    'post_type' => 'eventos',
                    'tax_query' => [
                        [
                            'taxonomy' => 'eventos_category',
                            'field' => 'slug',
                            'terms' => $estado['value']
                        ]
                    ],
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
                foreach ($recent_posts as $current) :
                    $date = explode('/', get_field('data_de_inicio', $current['ID']));
                    $date = $date[0] . '/' . $date[1];
                ?>
                    <div class="aside__card">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendar.svg" alt=""><?php echo $date; ?></span>
                        <h5><?php echo get_the_title($current['ID']); ?></h5>
                        <p><?php echo get_the_excerpt($current['ID']); ?></p>
                        <a href="<?php echo get_permalink($current['ID']); ?>">Saiba mais</a>
                    </div>
                <?php endforeach; ?>
                <a href="<?php echo get_field('link_de_proximos_eventos'); ?>">Ver os próximos eventos</a>
            </div>
            <?php get_template_part('template-parts/components/content-last-news'); ?>
        </div>

        <a class="banner" href="<?php echo get_field('link_inferior'); ?>" style="background-image: url(<?php echo get_field('imagem_de_fundo'); ?>);">
        <?php echo get_field('texto_inferior'); ?>
        </a>
    </section>
</main>

<?php get_footer(); ?>