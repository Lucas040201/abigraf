<?php
$args = [
    'numberposts' => 3,
    'post_status' => 'publish'
];
$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $current) :
    $category = get_the_category($current['ID']);
    $category = (count($category)) ? $category[0]->name : '';
?>
        
<?php endforeach; ?>