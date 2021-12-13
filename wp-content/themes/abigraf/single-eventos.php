<?php get_header(); ?>


<?php while ($wp_query->have_posts()) : the_post(); ?>

<?php endwhile; ?>
<?php get_footer(); ?>