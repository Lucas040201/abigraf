<?php

/**
 * Template Name: Login
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<main class="login__container">
    <section class="wrapper">
        <div class="area-exclusiva">
            <h3 class="titulo">Área Exclusiva</h3>

            <form action="" method="post">
                <input class="input input-full" type="email" name="email" id="email" placeholder="Usuário *" required>
                <input class="input input-full" type="password" name="senha" id="senha" placeholder="Senha *" required>

                <div class="links">
                    <span class="esqueci">Esqueci minha senha</span>
                    <span class="cadastrar">Quero me cadastrar</span>

                    <input class="button" name="logar" type="submit" value="Entrar">
                </div>
            </form>
        </div>

        <div class="esqueci-senha">
            <h3 class="titulo">Esqueci minha senha</h3>

            <form action="" method="post">
                <input class="input input-full" type="email" name="esqueciemail" id="esqueciemail" placeholder="E-mail *" required>

                <div class="links">
                    <input class="button" name="esqueciasenha" id="esqueciasenha" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <div class="quero-cadastrar">
            <h3 class="titulo">Quero me cadastrar</h3>

            <form action="" method="post" name="novo_login" id="novo_login">
                <h4>Dados do Associado</h4>
                <input class="input input-full cnpj" minlength="18" maxlength="18" type="text" name="cnpj" id="" placeholder="CNPJ ou CPF *" required>
                <input class="input input-full" type="text" name="nomeempresa" id="" placeholder="Nome da empresa  *" required>

                <h4>Dados de Acesso</h4>

                <input class="input input-full" type="text" name="nome" id="" placeholder="Nome *" required>
                <input class="input input-full" type="email" name="email" id="" placeholder="E-mail *" required>
                <input class="input input-half" minlength="8" maxlength="20" type="password" name="senha" id="" placeholder="Senha *" required>
                <input class="input input-half" minlength="8" maxlength="20" type="password" name="" id="" placeholder="Confirmar senha *" required>
                <span>Sua senha deve conter de 8 a 20 caracteres</span>

                <div class="links">
                    <?php echo do_shortcode('[associados]'); ?>
                </div>
            </form>
        </div>
    </section>
</main>
<?php get_footer(); ?>