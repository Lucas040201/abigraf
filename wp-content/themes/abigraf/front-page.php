<?php
get_header();
?>

<main>
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
            <h3 class="titulo">Regionais Abigraf</h3>
            <p><?php echo get_field('texto_regionais'); ?></p>
            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mapa-gps.svg" alt="">Navegue no mapa e saiba mais</span>
        </div>
       <?php get_template_part('template-parts/components/mapas'); ?>
    </section>
    <section class="wrapper">
        <div class="linknews-home">
            <?php
            $imagemGaleria = get_field('imagem_de_fundo_de_galeria_de_fotos');
            $linkGaleria = get_field('link_galeria_de_fotos');
            $linkProducao = get_field('link_guia_de_producao_sustentavel');
            $imagemProducao = get_field('imagem_de_fundo_do_link_de_producao_sustentavel');
            ?>
            <div class="aside">
                <?php if (!empty($imagemGaleria) && !empty($linkGaleria)) : ?>
                    <a style="background-image: url(<?php echo $imagemGaleria; ?>;" href="<?php echo $linkGaleria; ?>" class="aside__galeria">
                        <span>Galeria de Fotos</span>
                        <p>Confira as fotos dos eventos da Abigraf. </p>
                    </a>
                <?php
                endif;
                if (!empty($imagemProducao) && !empty($linkProducao)) :
                ?>
                    <a style="background-image: url(<?php echo $imagemProducao; ?>);" href="<?php echo $linkProducao; ?>" class="aside__guia">
                        <span>Guia Produção Sustentável</span>
                        <p>Faça o download do arquivo aqui e saiba mais</p>
                    </a>
                <?php endif; ?>
            </div>
            <?php get_template_part('template-parts/components/content-last-news'); ?>
        </div>
        <div class="tvabrigaf-home">
            <article>
                <h3 class="titulo">TV Abrigraf</h3>
                <p><?php echo get_field('texto_tv_abigraf'); ?></p>
                <a href="<?php echo get_field('link_tv_abigraf'); ?>" class="button">Assista</a>
            </article>
            <img src="<?php echo get_field('imagem_ao_lado') ?>" alt="">
        </div>
    </section>

    <?php
    $args = [
        'numberposts' => 8,
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
    <section class="faixa-amarela faixa-amarela--agenda">
        <h3 class="titulo">Agenda da Indústria Gráfica</h3>
        <div class="wrapper">
            <div class="slider-agenda">
                <?php
                foreach ($recent_posts as $current) :
                    $category = get_the_category($current['ID']);
                    $category = (count($category)) ? $category[0]->name : '';
                    $date = explode('/', get_field('data_de_inicio', $current['ID']));
                    $date = $date[0] . '/' . $date[1];
                ?>
                    <div class="slider-agenda__card">
                        <article>
                            <span class="slider-agenda__date"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendar.svg" alt=""><?php echo $date; ?></span>
                            <h3><?php echo get_the_title($current['ID']); ?></h3>
                            <p><?php echo get_the_excerpt($current['ID']); ?></p>
                            <a href="<?php echo get_permalink($current['ID']); ?>">Saiba mais</a>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php if (have_rows('cards')) : ?>
        <section class="wrapper cards">
            <?php while (have_rows('cards')) : the_row(); ?>
                <div class="cards__item">
                    <div class="cards__icon">
                        <img src="<?php echo get_sub_field('icone_do_card'); ?>" alt="">
                        <span><?php echo get_sub_field('titulo_do_card') ?></span>
                    </div>
                    <article style="background-image: url(<?php echo get_sub_field('imagem_de_fundo'); ?>);">
                        <p><?php echo get_sub_field('texto_do_card'); ?></p>
                        <a href="<?php echo get_sub_field('link_do_card'); ?>" class="button">Conheça</a>
                    </article>
                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>

    <section class="wrapper dualbanners">
        <a href="<?php echo get_field('link_cartilha'); ?>"><img src="<?php echo get_field('imagem_cartilha'); ?>" alt=""></a>
        <a href="<?php echo get_field('link_conlatingraf'); ?>"><img src="<?php echo get_field('imagem_conlatingraf'); ?>" alt=""></a>
    </section>
</main>

<?php
get_footer();
?>