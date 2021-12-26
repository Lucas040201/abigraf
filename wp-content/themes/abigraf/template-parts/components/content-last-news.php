<div class="ultimas-noticias">
    <h3 class="titulo titulo--azul">Últimas Notícias</h3>
    <?php
    $estado = get_field('estado');
    $args = [
        'numberposts' => 3,
        'post_status' => 'publish',
        'post_type' => 'post'
    ];

    $tax = [];
    if (!empty($estado)) {
        $args['tax_query'] = [
            [
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => [$estado['value']]
            ]
        ];
    }
    $recent_posts = wp_get_recent_posts($args);
    foreach ($recent_posts as $current) :
        $category = get_the_category($current['ID']);
        $category = (count($category)) ? $category[0]->name : '';
    ?>
        <div class="noticias__card">
            <span class="noticias__category"><?php echo $category; ?></span>
            <h3><?php echo get_the_title($current['ID']); ?></h3>
            <p><?php echo get_the_excerpt($current['ID']); ?></p>
            <a href="<?php echo get_permalink($current['ID']); ?>">Leia mais</a>
        </div>
    <?php endforeach; ?>
</div>