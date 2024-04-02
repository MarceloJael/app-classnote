<?php 

include './includes/head.php';
include './bd/verificar_autenticacao.php';

$erro_login = isset($_SESSION['erro_login']) ? $_SESSION['erro_login'] : "";
unset($_SESSION['erro_login']);

?>

<div class="login">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row div-sombra">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-center p-5 bg-primaria">
                <div class="row">

                    <div class="col-12">
                        <img src="./img/classnote-light.png" alt="Logo do sistema do ClassNote" title="Logo do sistema do ClassNote" class="logo mb-5"> <br />
                    </div>

                    <div class="col-12">
                        <p class="font-color-secundaria">
                            Um sistema para ajudá-lo a alcançar seu sonho e objetivo: a sua formatura. Gerencie o conteúdo de suas aulas, e nunca esqueça da suas para provas e entregas de trabalhos, tudo isso em um único local.
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center align-items-center p-5 bg-secundaria">
                <div class="row">
                    
                    <?php if (!empty($erro_login)): ?>
                        <div class="col-12 text-center p-3 error mb-3">
                            <h5><i class="fa-solid fa-triangle-exclamation"></i> <?php echo $erro_login; ?></h5>
                        </div>
                    <?php endif; ?>

                    <form action="./bd/login.php" method="POST" class="py-3">

                        <div class="col-12">
                            <input type="text" class="my-1 text-center" placeholder="Digite o e-mail" id="email" name="email" required>
                        </div>

                        <div class="col-12">
                            <input type="password" class="my-1 text-center" placeholder="Digite a senha" id="senha" name="senha" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="my-3 text-center btn-green">Entrar <i class="fa-solid fa-circle-right"></i></button>
                        </div>

                    </form>

                    <hr />

                    <div class="col-12 p-3 text-center">
                        <span>Ainda não possui conta? </span>
                        <a href="cadastro.php"><button class="m-3 text-center btn-cadastro">Criar nova conta <i class="fa-solid fa-circle-plus"></i></button></a>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>