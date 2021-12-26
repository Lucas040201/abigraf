<header class="header">
    <section class="header__top">
        <div class="wrapper">
            <span class="header__menu">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/menu.svg" alt="">
            </span>
            <a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" alt=""></a>
            <a href="<?php echo get_field('youtube', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube.svg" alt=""></a>
            <a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" alt=""></a>
            <a href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/user.svg" alt=""></a>
        </div>
    </section>
    <?php
    $estado = get_field('estado');

    if (have_rows('menus', 'option')) :
        while (have_rows('menus', 'option')) : the_row();
            if ($estado['value'] = get_sub_field('estado_relacionado', 'option')) :
    ?>
                <section class="header__mid">
                    <div class="wrapper">
                        <a href="<?php echo get_sub_field('link_do_logo', 'option'); ?>">
                            <h1>Abigraf Nacional <img src="<?php echo get_sub_field('logo_do_menu', 'option'); ?>" alt="Abigraf Nacional"></h1>
                        </a>
                        <form action="#" method="post" class="form">
                            <div class="form__box">
                                <input class="form__text" id="search" type="text" name="search" placeholder="O que você busca?">
                                <button class="form__submit" type="submit">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.svg" alt="" srcset="">
                                </button>
                            </div>
                        </form>
                    </div>
                </section>
                <?php if (have_rows('itens_do_menu', 'option')) : ?>
                    <nav class="nav">
                        <div class="wrapper">
                            <ul>
                                <?php while (have_rows('itens_do_menu', 'option')) : the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link_do_item', 'option'); ?>"><?php echo get_sub_field('texto_do_item', 'option'); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </nav>
    <?php
                endif;
                break;
            endif;
        endwhile;
    endif;
    ?>
</header>