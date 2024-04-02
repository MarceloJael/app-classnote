<?php 

include './bd/verificar_autenticacao.php';
include './includes/head.php'; 

$id_materia = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
$nome_materia = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : '';
$professor_materia = isset($_GET['professor']) ? htmlspecialchars($_GET['professor']) : '';
$segunda = isset($_GET['segunda']) ? htmlspecialchars($_GET['segunda']) : '';
$terca = isset($_GET['terca']) ? htmlspecialchars($_GET['terca']) : '';
$quarta = isset($_GET['quarta']) ? htmlspecialchars($_GET['quarta']) : '';
$quinta = isset($_GET['quinta']) ? htmlspecialchars($_GET['quinta']) : '';
$sexta = isset($_GET['sexta']) ? htmlspecialchars($_GET['sexta']) : '';
$sabado = isset($_GET['sabado']) ? htmlspecialchars($_GET['sabado']) : '';
$domingo = isset($_GET['domingo']) ? htmlspecialchars($_GET['domingo']) : '';
$hora = isset($_GET['hora']) ? htmlspecialchars($_GET['hora']) : '';

?>

    <div class="materia">
        <div class="container">

            <?php include './includes/header.php'; ?>

            <div class="row">
                <div class="col-12 justify-content-center align-items-center text-center my-3">

                    <?php 
                        if (isset($_GET['nome'])) {
                            echo "<h2>EDITAR MATÉRIA</h2> <br />";
                        } else {
                            echo "<h2>CRIAR NOVA MATÉRIA</h2> <br />";
                        }
                    ?>

                </div>
            </div>

            <?php if (!empty($erro_materia)): ?>
                <div class="col-12 text-center p-3 error mb-3">
                    <h5><i class="fa-solid fa-triangle-exclamation"></i> <?php echo $erro_materia; ?></h5>
                </div>
            <?php endif; ?>
       
            <?php 
                if (!isset($_GET['id']) && empty($id_materia)) {
                    echo '<form action="./bd/insert_materia.php" method="POST" class="py-3">';
                } else {
                    echo '<form action="./bd/update_materia.php" method="POST" class="py-3">';
                }
            ?>

                <div class="row">

                    <input type="hidden" name="id_materia" value="<?php echo $id_materia; ?>">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <input type="text" class="my-1 text-center" placeholder="Qual o nome da matéria?" id="materia" name="materia" value="<?php echo isset($nome_materia) ? $nome_materia : ''; ?>" required>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <input type="text" class="my-1 text-center" placeholder="Digite o nome do professor" id="professor" name="professor" value="<?php echo isset($professor_materia) ? $professor_materia : ''; ?>"  required>
                    </div>

                    <div class="row">

                        <div class="col-12 mt-3 text-center">
                            <span><b>Marque os dias que tem aula dessa matéria:</b></span> <br /><br />
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                            <input type="checkbox" id="segunda" name="segunda" value="segunda" <?php if(isset($segunda) && $segunda == 1) echo 'checked'; ?>>
                            <label for="segunda"> <b>Segunda-feira</b></label>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                            <input type="checkbox" id="terca" name="terca" value="terca" <?php if(isset($terca) && $terca == 1) echo 'checked'; ?>>
                            <label for="terca"> <b>Terça-feira</b></label>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                            <input type="checkbox" id="quarta" name="quarta" value="quarta" <?php if(isset($quarta) && $quarta == 1) echo 'checked'; ?>>
                            <label for="quarta"> <b>Quarta-feira</b></label>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                            <input type="checkbox" id="quinta" name="quinta" value="quinta" <?php if(isset($quinta) && $quinta == 1) echo 'checked'; ?>>
                            <label for="quinta"> <b>Quinta-feira</b></label>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                            <input type="checkbox" id="sexta" name="sexta" value="sexta" <?php if(isset($sexta) && $sexta == 1) echo 'checked'; ?>>
                            <label for="sexta"> <b>Sexta-feira</b></label>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                            <input type="checkbox" id="sabado" name="sabado" value="sabado" <?php if(isset($sabado) && $sabado == 1) echo 'checked'; ?>>
                            <label for="sabado"> <b>Sábado</b></label>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                            <input type="checkbox" id="domingo" name="domingo" value="domingo" <?php if(isset($domingo) && $domingo == 1) echo 'checked'; ?>>
                            <label for="domingo"> <b>Doming-feira</b></label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-4 mx-auto text-center">
                            <label for="hora"> <b>Qual horario da aula </b> </label>
                            <input type="time" id="hora" name="hora" value="<?php echo isset($hora) ? $hora : ''; ?>">
                        </div>

                    </div>

                    <div class="col-12">
                        <button type="submit" class="my-3 text-center btn-green">Adicionar matéria <i class="fa-solid fa-circle-plus"></i></button>
                    </div>

                </div>
            </form>

            <div class="row">

            <?php
                
                include './bd/conexao.php';

                $sql = "SELECT * FROM materias";
                $resultado = $conexao->query($sql);

              if ($resultado === false) {
                    die("Erro ao executar a query: " . $conexao->error);
                }

            if ($resultado->num_rows > 0) {
                
                while ($row = $resultado->fetch_assoc()) {
                    $id_materia = $row['id'];
                    $nome_materia = $row['nome'];
                    $nome_professor = $row['professor'];
            ?>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-4">
                        <div class="lista-materia">
                            <span>Nome: <b><?php echo $nome_materia; ?></b></span> <br />
                            <span>Nome do professor: <b><?php echo $nome_professor; ?></b></span><br /><br />
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-3 mx-auto text-center">
                                    <a href="./bd/select_materia.php?id=<?php echo $id_materia; ?>">
                                        <div class="btn-adicionar">
                                            Editar
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-3 mx-auto text-center">
                                    <a href="./bd/delete_materia.php?id=<?php echo $id_materia; ?>">
                                        <div class="btn-excluir">
                                            Excluir
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                } else {
                    echo '<div class="text-center"><i>Ainda não criada matérias</i></div>';
                }

                $conexao->close();
                ?>

            </div>

        </div>
    </div>

<?php include './includes/footer.php'; ?>