<?php

/**
 * @todo ajustar css de itens do faq, principalmente os titulos
 */
if (get_field('possui_titulos_e_subtitulos')) :

    if (have_rows('accordeon_com_titulo_e_subtitulos')) :
        while (have_rows(('accordeon_com_titulo_e_subtitulos'))) : the_row();
            $title = get_sub_field('titulo_da_secao_de_accordeon');
            $subtitle = get_sub_field('subtitulo_da_secao_de_accordeon');
            echo ($title) ? "<h3 class=\"titulo\">$title</h3>" : '';
            echo ($subtitle) ? "<h4>$subtitle</h4>" : '';

            if (have_rows('itens_do_accordeon_iterno')) :
                while (have_rows('itens_do_accordeon_iterno')) : the_row();
?>
                    <div class="accordion__card accordion__card--open">
                        <div class="accordion__tab">
                            <span class="accordion__title"><?php echo get_sub_field('titulo_do_accordeon'); ?></span>
                        </div>
                        <div class="accordion__info">
                            <div class="wrapper">
                                <?php echo get_sub_field('conteudo_do_accordeon'); ?>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
        endwhile;
    endif;
else :
    if (have_rows('itens_do_accordeon')) :
        while (have_rows('itens_do_accordeon')) : the_row();
            ?>
            <div class="accordion__card accordion__card--open">
                <div class="accordion__tab">
                    <span class="accordion__date"><?php echo get_sub_field('titulo_do_accordeon'); ?></span>
                </div>
                <div class="accordion__info">
                    <div class="wrapper">
                        <?php echo get_sub_field('conteudo_do_accordeon'); ?>
                    </div>
                </div>
            </div>
<?php
        endwhile;
    endif;
endif;
?>