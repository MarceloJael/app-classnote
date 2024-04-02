<?php 

include './bd/verificar_autenticacao.php';
include './includes/head.php'; 

$id_entrega = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
$id_materia = isset($_GET['materia_i']) ? htmlspecialchars($_GET['materia_i']) : '';
$tipo_entrega = isset($_GET['tipo_entrega']) ? htmlspecialchars($_GET['tipo_entrega']) : '';
$data_entrega = isset($_GET['data_entrega']) ? htmlspecialchars($_GET['data_entrega']) : '';
$status_entrega = isset($_GET['status_entrega']) ? htmlspecialchars($_GET['status_entrega']) : '';
$anotacao_entrega = isset($_GET['anotacao_entrega']) ? htmlspecialchars($_GET['anotacao_entrega']) : '';
$link_entrega = isset($_GET['link_entrega']) ? htmlspecialchars($_GET['link_entrega']) : '';
$nota_entrega = isset($_GET['nota_entrega']) ? htmlspecialchars($_GET['nota_entrega']) : '';

?>

<div class="aula">
    <div class="container">

        <?php include './includes/header.php'; ?>

        <?php
                
        include './bd/conexao.php';

        $sql = "SELECT * FROM materias";
        $sql_entrega = "SELECT e.id, e.materia_id, m.nome, e.tipo_entrega, e.data_entrega, e.status_entrega, e.anotacao_entrega, e.link_entrega, e.nota_entrega FROM entregas e INNER JOIN materias m ON e.materia_id = m.id;";
        $resultado_materias = $conexao->query($sql);
        $resultado_entrega = $conexao->query($sql_entrega);
        
        if ($resultado_materias === false || $resultado_entrega === false) {
            die("Erro ao executar a query: " . $conexao->error);
        }

        if ($resultado_materias->num_rows > 0) { 

            include './includes/form_entrega.php';

         } else {
            echo '
                <div class="d-flex justify-content-center align-items-center vh-100">
                    <p>Ainda não há matérias disponíveis. <a href="materia.php">Adicione uma matéria</a> para depois adicionar aulas.</p>
                </div>';
        }
        ?>

        <div class="row">

        <?php
                
            if ($resultado_entrega === false) {
                die("Erro ao executar a query: " . $conexao->error);
            }

            if ($resultado_entrega->num_rows > 0) {
            
                while ($row = $resultado_entrega->fetch_assoc()) {
                    $id_entrega = $row['id'];
                    $nome_materia = $row['nome'];
                    $tipo_entrega = $row['tipo_entrega'];
                    $data_entrega = $row['data_entrega'];
                    $status_entrega = $row['status_entrega'];
                    $anotacao_entrega = $row['anotacao_entrega'];
                    $link_entrega = $row['link_entrega'];
                    $nota_entrega = $row['nota_entrega'];
        ?>  
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-4">
                        <div class="lista-materia">
                            <span>Status: <b><?php echo $status_entrega; ?></b></span> <br />
                            <span>Data da entrega: <b><?php echo $data_entrega; ?></b></span> <br />
                            <span>Matéria: <b><?php echo $nome_materia; ?></b></span><br />
                            <span>Tipo entrega: <b><?php echo $tipo_entrega; ?></b></span><br />
                            <?php
                            if ($link_entrega !== "") {
                                echo '<span>Link da aula: <a href="'.$link_entrega.'" target="_blank"><b>CLIQUE AQUI</b></span></a><br />';
                            };

                            if ($nota_entrega !== "") {
                                echo '<span>Nota: <b>'.$nota_entrega.'</b></span><br />';
                            };
                            ?>
                          
                            <span>Anotação: <p class="text-justify"><i><?php echo $anotacao_entrega; ?></i></p></span><br />

                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-3 mx-auto text-center">
                                    <a href="./bd/select_entrega.php?id=<?php echo $id_entrega; ?>">
                                        <div class="btn-adicionar">
                                            Editar
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-3 mx-auto text-center">
                                    <a href="./bd/delete_entrega.php?id=<?php echo $id_entrega; ?>">
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
