<?php

/**
 * Template Name: Associe-se
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <section class="wrapper associe-se">
        <h3 class="titulo">Associação</h3>
        <article class="conteudo-texto">
            <?php the_content(); ?>
        </article>
    </section>
    <section class="faixa-amarela">
        <div class="wrapper faixa-amarela__itens">
            <h4 class="titulo">Vantagens</h4>
            <?php
            if (have_rows('vantagens')) :
                while (have_rows('vantagens')) : the_row();
            ?>
                    <div class="faixa-amarela__item">
                        <img src="<?php echo get_sub_field('icone'); ?>" alt="">
                        <span><?php echo get_sub_field('texto'); ?></span>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
    <section class="wrapper">
        <a class="guia-beneficios" style="background-image: url('<?php echo get_field('imagem_de_fundo'); ?>');" href="<?php echo get_field('link_do_beneficio'); ?>" target="_blank" rel="noopener noreferrer">
            <?php echo get_field('texto_do_beneficio'); ?>
        </a>

        <article class="conteudo-texto">
            <?php echo get_field('texto_inferior'); ?>
        </article>

        <div class="accordion__card">
            <div class="accordion__tab">
                <span class="accordion__date">Formulário pré-cadastro de Associação</span>
            </div>
            <div class="accordion__info">
                <form class="formulario-form" action="">
                    <input name="RAZAO" class="input input-half" placeholder="Razão Social*" type="text" name="" id="">
                    <input name="NOME" class="input input-half" placeholder="Nome Fantasia*" type="text" name="" id="">
                    <input name="CNPJ" class="input input-medium" placeholder="CNPJ*" type="text" name="" id="">
                    <input name="INCRIESTADUAL" class="input input-small" placeholder="Inscrição Estadual" type="text" name="" id="">
                    <input name="INCRIMUNICIPAL" class="input input-small" placeholder="Inscrição Municipal" type="text" name="" id="">
                    <input name="END" class="input input-big" placeholder="Endereço" type="text" name="" id="">
                    <input name="NUM" class="input input-smallest" placeholder="Número" type="number" name="" id="">
                    <input name="COMPLE" class="input input-smallest" placeholder="Complemento" type="text" name="" id="">
                    <input name="CEP" class="input input-small" placeholder="CEP" type="text" name="" id="">
                    <input name="BAIRRO" class="input input-small" placeholder="Bairro" type="text" name="" id="">
                    <input name="CIDADE" class="input input-smallest" placeholder="Cidade" type="text" name="" id="">
                    <input name="UF" class="input input-smallest" placeholder="UF" type="text" name="" id="">
                    <input name="DDD" class="input input-smallest" placeholder="DDD" type="text" name="" id="">
                    <input name="TEL" class="input input-small" placeholder="Telefone" type="tel" name="" id="">
                    <input name="DDD_OPCIONAL" class="input input-smallest" placeholder="DDD" type="number" name="" id="">
                    <input name="TEL_OPCIONAL" class="input input-small" placeholder="Telefone (opcional)" type="tel" name="" id="">

                    <h3>Responsável pelo preenchimento</h3>

                    <input name="NOMERESPONSAVEL" class="input input-full" placeholder="Nome do Responsável" type="text" name="" id="">
                    <input name="CARGO" class="input input-half" placeholder="Cargo do Responsável" type="text" name="" id="">
                    <input name="EMAILRESPONSAVEL" class="input input-half" placeholder="E-mail" type="email" name="" id="">

                    <input name="DDDRESPONSAVEL" class="input input-smallest" placeholder="DDD" type="text" name="" id="">
                    <input name="TELEFONERESPONSAVEL" class="input input-small" placeholder="Telefone" type="tel" name="" id="">
                    <input name="DDRESPONSAVEL_OPCIONAL" class="input input-smallest" placeholder="DDD" type="number" name="" id="">
                    <input name="TELEFONERESPONSAVEL_OPCIONAL" class="input input-small" placeholder="Telefone (opcional)" type="tel" name="" id="">

                    <span>*campos obrigatórios</span>

                    <input class="button" type="submit" value="Associar">
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>