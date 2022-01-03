<?php

/**
 * Template Name: Tela manutenção
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #fff;z-index: 9999;display: flex;flex-direction: column;justify-content: center;row-gap: 2rem;align-items: center;font-size: 3rem;text-transform: uppercase;">
		<p>Página em manutenção</p>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
	</div>
</main>
<?php get_footer(); ?>