<?php

/**
 * Template Name: Historia
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper historia">
        <?php get_template_part('template-parts/components/accordeon'); ?>
    </section>
</main>

<?php get_footer(); ?>