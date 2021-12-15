<?php
get_header();
?>

<main>
    <div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #fff;z-index: 9999;display: flex;flex-direction: column;justify-content: center;row-gap: 2rem;align-items: center;font-size: 3rem;text-transform: uppercase;">
		<p>Site em manutenção</p>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
	</div>
    <section class="wrapper main-slider">
            <a href="" target="_blank">
                <img class="slider-item" src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/banner1.jpg" alt="">
            </a>
            <a href="" target="_blank">
                <img class="slider-item" src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/banner2.jpg" alt="">
            </a>
            <a href="" target="_blank">
                <img class="slider-item" src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/banner3.jpg" alt="">
            </a>
            <a href="" target="_blank">
                <img class="slider-item" src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/banner4.jpg" alt="">
            </a>
            <a href="" target="_blank">
                <img class="slider-item" src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/banner5.jpg" alt="">
            </a>
            <a href="" target="_blank">
                <img class="slider-item" src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/banner6.jpg" alt="">
            </a>
    </section>
    <section class="wrapper regionais-home">
        <div class="regionais-home__text">
            <h3 class="titulo">Regionais Abigraf</h3>
            <p>A ABIGRAF possui estrutura de representação em 21 Estados e no Distrito Federal, atuando de forma coordenada em busca de resultados concretos e de melhorias para a Indústria Gráfica Brasileira.</p>
            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mapa-gps.svg" alt="">Navegue no mapa e saiba mais</span>
        </div>
        <a href="">
            <map name="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/map-sample.png" alt="">
            </map>
        </a>
    </section>
    <section class="wrapper">
        <div class="linknews-home">
            <div class="aside">
                <a style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/ex/galeria.png);" href="" class="aside__galeria">
                    <span>Galeria de Fotos</span>
                    <p>Confira as fotos dos eventos da Abigraf. </p>
                </a>
                <a style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/ex/guia.png);" href="#" class="aside__guia">
                    <span>Guia Produção Sustentável</span>
                    <p>Faça o download do arquivo aqui e saiba mais</p>
                </a>
            </div>
            <div class="ultimas-noticias">
                <h3 class="titulo titulo--azul">Últimas Notícias</h3>
                <div class="noticias__card">
                    <span class="noticias__category">Webinar</span>
                    <h3>Planejamento de vendas para 2022: Como fazer e quais tendências observar</h3>
                    <p>Já estamos na reta final de 2021 e se você ainda não programou as estratégias para 2022, não perca mais tempo, afinal, se você não parar, s...</p>
                    <a href="#">Leia mais</a>
                </div>
                <div class="noticias__card">
                    <span class="noticias__category">Webinar</span>
                    <h3>SENAI – FACULDADE DE TECNOLOGIA / PRODUÇÃO GRÁFICA</h3>
                    <p>Com o reaquecimento do mercado, cada vez mais as indústrias precisam de mão de obra qualificada e de bons profissionais...</p>
                    <a href="#">Leia mais</a>
                </div>
                <div class="noticias__card">
                    <span class="noticias__category">Webinar</span>
                    <h3>Segmento têxtil ganha novos contornos</h3>
                    <p>O Podcast Ondas Impressas, da jornalista Tânia Galluzzi e do consultor Hamilton Costa, conversa com Tiago Ferraresi...</p>
                    <a href="#">Leia mais</a>
                </div>
            </div>
        </div>
        <div class="tvabrigaf-home">
            <article>
                <h3 class="titulo">TV Abrigraf</h3>
                <p>A TV ABIGRAF mostra todas ações das nossas entidades como depoimentos, opiniões, eventos, treinamentos e palestras. </p>
                <a href="" class="button">Assista</a>
            </article>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/box-tv-abigraf 1.png" alt="">
        </div>
    </section>
    <section class="faixa-amarela faixa-amarela--agenda">
        <h3 class="titulo">Agenda da Indústria Gráfica</h3>
        <div class="wrapper">
            <div class="slider-agenda">
                <div class="slider-agenda__card">
                    <article>
                        <span class="slider-agenda__date"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendar.svg" alt="">14/12</span>
                        <h3>Abigraf Nacional</h3>
                        <p>Lançamento TV ABIGRAF</p>
                        <a href="">Saiba mais</a>
                    </article>
                </div>

                <div class="slider-agenda__card">
                    <article>
                        <span class="slider-agenda__date"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendar.svg" alt="">24/05</span>
                        <h3>Evento Apoiado</h3>
                        <p>FLEXO & LABELS 2022 - Feira Latinoamericana do Segmento Label</p>
                        <a href="">Saiba mais</a>
                    </article>
                </div>

                <div class="slider-agenda__card">
                    <article>
                        <span class="slider-agenda__date"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendar.svg" alt="">20/07</span>
                        <h3>Evento Apoiado</h3>
                        <p>Future Print 2022</p>
                        <a href="">Saiba mais</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper cards">
        <div class="cards__item">
            <div class="cards__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/juridico.svg" alt="">
                <span>Jurídico</span>
            </div>
            <article style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/ex/juridico.png);">
                <p>Assessoria profissional consultiva personalizada nas áreas trabalhista, tributária e previdenciária. </p>
                <a href="" class="button">Conheça</a>
            </article>
        </div>
        <div class="cards__item">
            <div class="cards__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/dados-economicos.svg" alt="">
                <span>Dados Econômicos</span>
            </div>
            <article style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/ex/dados-economicos.png);">
                <p>Conteúdo exclusivo aos associados: série de dados referentes ao setor como análises, negociações e política industrial.</p>
                <a href="" class="button">Acesse</a>
            </article>
        </div>
        <div class="cards__item">
            <div class="cards__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/associe-se.svg" alt="">
                <span>Associe-se</span>
            </div>
            <article style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/ex/associe-se.png);">
                <p>Conheça nosso Guia de Benefícios e veja as vantagens de ser um dos nossos Associados.</p>
                <a href="" class="button">Conheça</a>
            </article>
        </div>
    </section>
    <section class="wrapper dualbanners">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/corona.jpg" alt=""></a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ex/c]onlatingraf.png" alt=""></a>
    </section>
</main>

<?php
get_footer();
?>