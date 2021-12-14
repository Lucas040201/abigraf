<?php
/**
 * Template Name: Missao Valores
 * Template Post Type: page
 * @since 1.0.0
 */
get_header();
?>
<aside>
    <h2>Missão e Valores</h2>
</aside>
<main>
    <section class="wrapper cards cards--nolink">
        <div class="cards__item">
            <div class="cards__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/associe-se.svg" alt="">
                <span>Missão</span>
            </div>
            <article style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/ex/missao.png);">
                <p>A Associação Brasileira da Indústria Gráfica (ABIGRAF Nacional) lidera, integra e representa o setor gráfico, valorizando a comunicação impressa e promovendo o desenvolvimento de seus associados e demais partes interessadas. </p>
            </article>
        </div>
        <div class="cards__item">
            <div class="cards__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/visao.svg" alt="">
                <span>Visão</span>
            </div>
            <article style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/ex/visao.png);">
                <p>Unir, fortalecer e expandir o setor gráfico brasileiro, interagindo de forma sustentável com outros setores da cadeia produtiva. </p>
            </article>
        </div>
    </section>
    <section class="faixa-amarela faixa-amarela--objetivos">
        <div class="wrapper">
            <h3 class="titulo">Objetivos</h3>
            <article>
                <ul>
                    <li>Contribuir para o progresso econômico e tecnológico do setor;</li>
                    <li>Identificar e defender os interesses gerais da indústria gráfica brasileira;</li>
                    <li>Manter parcerias com centros de pesquisa e ensino na área gráfica;</li>
                    <li>Promover o intercâmbio com entidades nacionais e estrangeiras, visando à elevação dos padrões técnicos e gerenciais;</li>
                    <li>Disseminar informações de interesse para o desenvolvimento profissional de seus associados;</li>
                    <li>Representar a indústria gráfica perante o poder público Federal, Estadual ou Municipal, sociedades autárquicas, de economia mista e demais entidades de interesse;</li>
                    <li>Apoiar o desenvolvimento e a integração das regionais da ABIGRAF estabelecidas no País.</li>
                </ul>
            </article>
        </div>
    </section>
    <section class="wrapper acoes">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/acoes.png" alt="">
        <article>
            <h3 class="titulo titulo--azul">Ações Estratégicas</h3>
            <p>Assumir obrigações e assinar convênios ou protocolos, inclusive com o Poder Público;</p>
            <p>Participar, como membro atuante, de atividades organizadas por entidades congêneres, nacionais ou internacionais;</p>
            <p>Incentivar, coordenar, promover e administrar formas de organização econômica do setor;</p>
            <p>Promover, coordenar e incentivar a edição de material técnico e bibliográfico, anuários, revistas e periódicos que digam respeito às atividades gráficas;</p>
            <p>Formar centrais, cooperativas ou consórcios, a fim de proporcionar aos associados facilidades em operações de crédito ou compra e venda de matérias-primas, insumos, equipamentos e produtos gráficos;</p>
            <p>Organizar, coordenar, patrocinar ou promover eventos dirigidos à indústria gráfica como congressos, feiras, simpósios, seminários, cursos, concursos e prêmios.</p>
        </article>
    </section>
</main>

<?php
get_footer();
?>