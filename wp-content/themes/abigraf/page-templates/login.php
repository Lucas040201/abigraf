<?php

/**
 * Template Name: Login
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<main class="login">
    <div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #fff;z-index: 9999;display: flex;flex-direction: column;justify-content: center;row-gap: 2rem;align-items: center;font-size: 3rem;text-transform: uppercase;">
        <p>Tela em manutenção</p>
        <img src="http://www.abigraf.org.br/wp-content/themes/abigraf/assets/images/logo.svg" alt="">
    </div>
        <section class="wrapper">
            <div class="area-exclusiva">
                <h3 class="titulo">Área Exclusiva</h3>

                <form action="">
                    <input class="input input-full" type="email" name="" id="" placeholder="Usuário *" required>
                    <input class="input input-full" type="password" name="" id="" placeholder="Senha *" required>

                    <div class="links">
                        <span class="esqueci">Esqueci minha senha</span>
                        <span class="cadastrar">Quero me cadastrar</span>

                        <input class="button" type="submit" value="Entrar">
                    </div>
                </form>
            </div>

            <div class="esqueci-senha">
                <h3 class="titulo">Esqueci minha senha</h3>

                <form action="">
                    <input class="input input-full" type="email" name="" id="" placeholder="E-mail *" required>

                    <div class="links">
                        <input class="button" type="submit" value="Enviar">
                    </div>
                </form>
            </div>

            <div class="quero-cadastrar">
                <h3 class="titulo">Quero me cadastrar</h3>

                <form action="" method="post" name="novo_login" id="novo_login">
                    <h4>Dados do Associado</h4>
                    <input class="input input-full cnpj" minlength="18" maxlength="18" type="text" name="cnpj" id="" placeholder="CNPJ *" required>

                    <h4>Dados de Acesso</h4>

                    <input class="input input-full" type="text" name="nome" id="" placeholder="Nome *" required>
                    <input class="input input-full" type="email" name="email" id="" placeholder="E-mail *" required>
                    <input class="input input-half" minlength="8" maxlength="20" type="password" name="senha" id="" placeholder="Senha *" required>
                    <input class="input input-half" minlength="8" maxlength="20" type="password" name="" id="" placeholder="Confirmar senha *" required>
                    <span>Sua senha deve conter de 8 a 20 caracteres</span>

                    <div class="links">
                        <input class="button" type="submit" value="Cadastrar">
                        <?php wp_nonce_field( 'Cadastrar' ); ?>
                    </div>
                    <?php
                        if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {

                            // Do some minor form validation to make sure there is content
                            if (isset ($_POST['cnpj'])) {
                                $title =  $_POST['cnpj'];
                            } else {
                                echo 'Please enter a  title';
                            }
                            if (isset ($_POST['email'])) {
                                $email = $_POST['email'];
                            } else {
                                echo 'Please enter the content';
                            }
                            $tags = $_POST['post_tags'];
                        
                            // Add the content of the form to $post as an array
                            $new_post = array(
                                'post_title'    => $title,
                                'post_content'  => $email,
                                'post_status'   => 'publish',
                                'post_type' => 'login',
                            );
                            //save the new post
                            $pid = wp_insert_post ($args);
                        }
                    ?>
                </form>
            </div>
        </section>
    </main>
<?php get_footer(); ?>