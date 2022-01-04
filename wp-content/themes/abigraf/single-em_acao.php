<?php get_header(); ?>
<aside>
    <h2>Notícias - Abigraf em Ação</h2>
</aside>
<main>
    <?php
    while (have_posts()) : the_post();
        $categoryCurrent = get_the_category(get_the_ID());
        $categoryCurrent = (count($categoryCurrent)) ? $categoryCurrent[0]->name : '';
        $date = get_the_date('d/F/Y');

        $date = explode('/', $date);

        $dateFormated = "$date[0] de $date[1] de $date[2]";
    ?>
        <section class="wrapper titulo-data">
            <span class="titulo"><?php echo $dateFormated; ?></span>
            <div class="social">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/Icon-Like.svg" alt="">
                    Curtir
                </a>
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter-tweet.svg" alt="">
                    Tweet
                </a>
                <a href="javascript: history.go(-1)"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn-voltar.svg" alt=""></a>
            </div>
            <span class="titulo-data__category"><?php echo $categoryCurrent; ?></span>
        </section>
        <section class="wrapper noticias-interna">
            <h2><?php echo get_the_title(); ?></h2>
            <article>
                <?php the_content(); ?>
            </article>
        </section>
    <?php
    endwhile;
    wp_reset_postdata();
    /**
     * Pega as postagens recentes
     */
    $args = [
        'numberposts' => 3,
        'post_status' => 'publish',
        'exclude' => get_the_ID(),
        'post_type' => 'em_acao'
    ];
    $recent_posts = wp_get_recent_posts($args);

    if ($recent_posts) :
    ?>
        <div class="wrapper noticias-relacionadas">
            <h3 class="titulo titulo--azul">Noticias Relacionadas</h3>
            <?php
            foreach ($recent_posts as $current) :
                $category = get_the_category($current['ID']);
                $category = (count($category)) ? $category[0]->name : '';
                $date = get_the_date('d/F/Y', $current['ID']);
                $date = explode('/', $date);
                $dateFormated = "$date[0] de $date[1] de $date[2]";
            ?>
                <div class="noticias__card">
                    <span class="noticias__date"><?php echo $dateFormated; ?></span>
                    <span class="noticias__category"><?php echo $category; ?></span>
                    <h3><?php echo get_the_title($current['ID']); ?></h3>
                    <p><?php echo get_the_excerpt($current['ID']); ?></p>
                    <a href="<?php echo get_the_permalink($current['ID']); ?>">Leia mais</a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>