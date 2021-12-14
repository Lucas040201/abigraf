<?php

/**
 * Template Name: FAQ
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper faq">
        <?php get_template_part('template-parts/components/accordeon');?>
    </section>
</main>

<?php get_footer(); ?>