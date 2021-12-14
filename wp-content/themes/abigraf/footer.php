<footer class="footer">
    <div class="footer__newsletter">
        <div class="wrapper">
            <p class="footer__text">Assine nossa Newsletter e receba informações sobre notícias, eventos e prêmios da Indústria Gráfica. </p>
            <form class="footer__form" action="#" method="post">
                <input class="footer__email" type="email" name="email" placeholder="E-mail" id="">
                <input class="footer__submit" type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <div class="footer__info wrapper">
        <a href="<?php echo get_field('link_do_endereco', 'option') ?>" target="_blank" rel="noopener noreferrer"><?php echo get_field('endereco', 'option') ?></a>
        <div class="footer__links">
            <?php
            if (have_rows('links_do_rodape', 'option')) :
                while (have_rows('links_do_rodape', 'option')) : the_row();
            ?>
                    <a href="<?php echo get_sub_field('link', 'option'); ?>"><?php echo get_sub_field('texto_do_link', 'option'); ?></a>
            <?php
                endwhile;
            endif;

            ?>
        </div>
        <div class="footer__socials">
            <a target="_blank" href="<?php echo get_field('twitter', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter-red.svg" alt=""></a>
            <a target="_blank" href="<?php echo get_field('youtube', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube-red.svg" alt=""></a>
            <a target="_blank" href="<?php echo get_field('facebook', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook-red.svg" alt=""></a>
        </div>
    </div>
    <?php wp_footer(); ?>
    <script>
        if (typeof head === 'function' && typeof App === 'function' && typeof app !== 'undefined') {
            head.load(app.getVendors(), function() {
                console.table(app.getVendors());
            });
        }
    </script>
</footer>

</body>

</html>