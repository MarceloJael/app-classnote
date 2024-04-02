<?php 
include './includes/head.php'; 
include './bd/insert_cadastro.php';

$nome = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : '';
$sobrenome = isset($_GET['sobrenome']) ? htmlspecialchars($_GET['sobrenome']) : '';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
$instituicao = isset($_GET['instituicao']) ? htmlspecialchars($_GET['instituicao']) : '';
$privacidade = isset($_GET['privacidade']) ? htmlspecialchars($_GET['privacidade']) : '';
$comunicacao= isset($_GET['comunicacao']) ? htmlspecialchars($_GET['comunicacao']) : '';

?>

    <div class="cadastro">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="row div-sombra p-3 bg-secundaria">

                <div class="col-12 justify-content-center align-items-center text-center my-3">

                    <?php 
                        if (isset($_GET['nome'])) {
                            echo "<h2>EDITAR SUA CONTA</h2> <br />";
                        } else {
                            echo "<h2>CRIAR NOVA CONTA</h2> <br />";
                        }
                    ?>

                    <p>
                        Use essa conta para acessar o ClassNote e desfrutar de todas as funcionalidades disponíveis no aplicativo.
                    </p>
                </div>

                <?php if ($erro): ?>
                    <div class="col-12 text-center p-3 error mb-3">
                        <h5><i class="fa-solid fa-triangle-exclamation"></i> <?php echo $erro; ?> </h3>
                    </div>
                <?php endif; ?>
                
                <?php 
                    if (isset($_GET['nome'])) {
                        echo '<form action="./bd/update_cadastro.php" method="POST" onsubmit="return validarFormulario()">';
                    } else {
                        echo '<form action="./bd/insert_cadastro.php" method="POST" onsubmit="return validarFormulario()">';
                    }
                ?>
                
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 justify-content-center align-items-center text-center">
                            <input type="text" class="my-1 text-center" placeholder="Digite seu nome" id="nome" name="nome" value="<?php echo $nome; ?>" required>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 justify-content-center align-items-center text-center">
                            <input type="text" class="my-1 text-center" placeholder="Digite seu sobrenome" id="sobrenome" name="sobrenome" value="<?php echo $sobrenome; ?>"  required>
                        </div>

                        <div class="col-12 justify-content-center align-items-center text-center">
                            <input type="email" class="my-1 text-center" placeholder="Digite seu e-mail" id="email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 justify-content-center align-items-center text-center">
                            <input type="password" class="my-1 text-center" placeholder="Digite sua senha" id="senha" name="senha" required>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 justify-content-center align-items-center text-center">
                            <input type="password" class="my-1 text-center" placeholder="Confirme sua senha" id="senha-conf" name="senha-conf" required>
                        </div>

                        <div class="col-12 justify-content-center align-items-center text-center">
                            <input type="text" class="my-1 text-center" placeholder="Qual sua instituição de ensino?" id="instituicao" name="instituicao" value="<?php echo $instituicao; ?>" required>
                        </div>

                        <div class="col-12 justify-content-center align-items-center text-center my-1">
                            <input type="checkbox" id="privacidade" name="privacidade" value="privacidade">
                            <label for="privacidade"> Concordo com as politicas de privacidade</label>
                        </div>

                        <div class="col-12 justify-content-center align-items-center text-center my-1">
                            <input type="checkbox" id="comunicacao" name="comunicacao" value="comunicacao">
                            <label for="comunicacao"> Quero receber comunicação por e-mail/Whatsapp</label>
                        </div>

                        <div class="col-12 justify-content-center align-items-center text-center">
                            <button type="submit" class="m-3 text-center btn-cadastro">Criar nova conta <i class="fa-solid fa-circle-plus"></i></button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        function validarFormulario() {
            var senha = document.getElementById("senha").value;
            var senhaConf = document.getElementById("senha-conf").value;

            if (senha !== senhaConf) {
                alert("As senhas não coincidem. Por favor, digite novamente.");
                return false;
            }

            return true; 
        }
    </script>


<?php include './includes/footer.php'; ?>