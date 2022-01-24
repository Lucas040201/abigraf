<?php

/**
 * Template Name: Dados Econômicos
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper dados-economicos">
        <article>
            <?php the_content(); ?>
        </article>
        <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></figure>

        <div class="dados-economicos__itens">
            <?php
                if( have_rows('itens') ):
                    while( have_rows('itens') ) : the_row();
                        $titulo = get_sub_field('titulo');
                        echo 
                        '<div class="dados-economicos__item">
                            <h4>' . $titulo . '</h4>';
                        
                            if( have_rows('anexo') ):
                                while ( have_rows('anexo') ) : the_row();
                                    if( get_row_layout() == 'link' ):
                                        $link = get_sub_field('link');
                                        echo '<a href="' . $link . '">Veja mais</a>'; 
                                    elseif( get_row_layout() == 'arquivo' ): 
                                        $arquivo = get_sub_field('arquivo');
                                        echo '<a target="_blank" href="' . $arquivo . '">Download</a>';
                                    endif;
                                endwhile;
                            endif;
                        echo '</div>';
                    endwhile;
                endif;
            ?>
            
        </div>
    </section>
</main>

<?php get_footer(); ?>