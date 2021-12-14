<?php get_header(); ?>
<aside>
    <h2>Notícias</h2>
</aside>
<main>
    <?php while (have_posts()) : the_post(); ?>

        <?php
        $categoryCurrent = get_the_category(get_the_ID());
        $categoryCurrent = (count($categoryCurrent)) ? $categoryCurrent[0]->name : '';

        $date = get_the_date('d/F/Y');

        $date = explode('/', $date);

        $dateFormated = "$date[0] de $date[1] de $date[2]";
        ?>

    <?php endwhile; ?>
    <?php

    /**
     * Pega as postagens recentes
     */
    $args = [
        'numberposts' => 3,
        'post_status' => 'publish',
        'exclude' => get_the_ID()
    ];
    $recent_posts = wp_get_recent_posts($args);
    foreach ($recent_posts as $current) :
        $category = get_the_category($current['ID']);
        $category = (count($category)) ? $category[0]->name : '';
    ?>
    <?php endforeach; ?>
</main>
<?php get_footer(); ?>