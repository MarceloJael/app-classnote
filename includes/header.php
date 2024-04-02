<header class="py-4">
        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center my-2 mx-auto d-flex justify-content-center align-items-center">
                <a href="./index.php">    
                    <div class="btn-header">
                        <img src="./img/logo-classnote.png" alt="Logo do sistema do ClassNote" title="Logo do sistema do ClassNote">
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center my-2 mx-auto d-flex justify-content-center align-items-center">
                <a href="./cadastro.php?nome=<?php echo urlencode($_SESSION['nome_usuario']); ?>&sobrenome=<?php echo urlencode($_SESSION['sobrenome_usuario']); ?>&email=<?php echo urlencode($_SESSION['email_usuario']); ?>&instituicao=<?php echo urlencode($_SESSION['instituicao_usuario']); ?>&privacidade=<?php echo urlencode($_SESSION['privacidade_usuario']); ?>&comunicacao=<?php echo urlencode($_SESSION['comunicacao_usuario']); ?>">
                    <div class="btn-header">
                        <h3>Olá, <?php echo $_SESSION['nome_usuario']; ?> <i class="fa-solid fa-pen"></i></h3>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center my-2 mx-auto d-flex justify-content-center align-items-center">
                <a href="./bd/logout.php">    
                    <div class="btn-header">
                        <h3><i class="fa-solid fa-right-from-bracket"></i> Sair</h3>
                    </div>
                </a>
            </div>

        </div>
</header>
