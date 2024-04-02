<?php 

include './bd/verificar_autenticacao.php';
include './includes/head.php'; 

$id_aula = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
$data_aula = isset($_GET['data_aula']) ? htmlspecialchars($_GET['data_aula']) : '';
$anotacao = isset($_GET['anotacao']) ? htmlspecialchars($_GET['anotacao']) : '';
$link_aula = isset($_GET['link_aula']) ? htmlspecialchars($_GET['link_aula']) : '';
$numero_aula = isset($_GET['numero_aula']) ? htmlspecialchars($_GET['numero_aula']) : '';

?>

<div class="aula">
    <div class="container">

        <?php include './includes/header.php'; ?>

        <?php
                
        include './bd/conexao.php';

        $sql = "SELECT * FROM materias";
        $sql_aula = "SELECT a.id, a.materia_id, m.nome, a.data_aula, a.anotacao, a.link_aula, a.numero_aula FROM aulas a INNER JOIN materias m ON a.materia_id = m.id;";
        $resultado_materias = $conexao->query($sql);
        $resultado_aula = $conexao->query($sql_aula);
        
        if ($resultado_materias === false || $resultado_aula === false) {
            die("Erro ao executar a query: " . $conexao->error);
        }

        if ($resultado_materias->num_rows > 0) { 

            include './includes/form_aula.php';

         } else {
            echo '
                <div class="d-flex justify-content-center align-items-center vh-100">
                    <p>Ainda não há matérias disponíveis. <a href="materia.php">Adicione uma matéria</a> para depois adicionar aulas.</p>
                </div>';
        }
        ?>

        <div class="row">

        <?php
                
            if ($resultado_aula === false) {
                die("Erro ao executar a query: " . $conexao->error);
            }

            if ($resultado_aula->num_rows > 0) {
            
                while ($row = $resultado_aula->fetch_assoc()) {
                    $id_aula = $row['id'];
                    $nome_materia = $row['nome'];
                    $data_aula = $row['data_aula'];
                    $anotacao = $row['anotacao'];
                    $link_aula = $row['link_aula'];
                    $numero_aula = $row['numero_aula'];
        ?>  
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-4">
                        <div class="lista-materia">
                            <span>Número da aula: <b><?php echo $numero_aula; ?></b></span> <br />
                            <span>Data da aula: <b><?php echo $data_aula; ?></b></span> <br />
                            <span>Matéria: <b><?php echo $nome_materia; ?></b></span><br />
                            <?php
                            if ($link_aula !== "") {
                                echo '<span>Link da aula: <a href="'.$link_aula.'" target="_blank"><b>CLIQUE AQUI</b></span></a><br />';
                            };
                            ?>
                          
                            <span>Anotação: <p class="text-justify"><i><?php echo $anotacao; ?></i></p></span><br />

                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-3 mx-auto text-center">
                                    <a href="./bd/select_aula.php?id=<?php echo $id_aula; ?>">
                                        <div class="btn-adicionar">
                                            Editar
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-3 mx-auto text-center">
                                    <a href="./bd/delete_aula.php?id=<?php echo $id_aula; ?>">
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
                    echo '<div class="text-center"><i>Ainda não há aulas adicionadas</i></div>';
                }

                //$conexao->close();
                ?>

        </div>

    </div>
</div>

<?php 
include './includes/footer.php'; 
?>
