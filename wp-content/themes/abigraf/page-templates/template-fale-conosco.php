<?php

/**
 * Template Name: Template Fale conosco
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper fale-conosco">
        <h3 class="titulo">Entre em contato</h3>
        <p>Para tirar dúvidas ou fazer algum comentário sobre a Abigraf.</p>

        <div class="fale-conosco__container">
            <div class="fale-conosco__form">
                <?php the_content(); ?>
            </div>
            <div class="fale-conosco__info">
                <address>
                    <?php echo get_field('endereco'); ?>
                </address>

            </div>
        </div>

    </section>
</main>
<?php get_footer(); ?>