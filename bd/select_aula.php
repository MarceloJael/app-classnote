<?php
session_start();
include 'conexao.php';

$erro_aula = "";

if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id_aula = $_GET['id'];

    $sql = "SELECT * FROM aulas WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id_aula);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();

        $id_aula= $row['id'];
        $materia_id = $row['materia_id'];
        $data_aula = $row['data_aula'];
        $anotacao = $row['anotacao'];
        $link_aula = $row['link_aula'];
        $numero_aula = $row['numero_aula'];
        
        header("Location: ../aula.php?id=$id_aula&materia_id=$materia_id&data_aula=$data_aula&anotacao=$anotacao&link_aula=$link_aula&numero_aula=$numero_aula");
        exit();

    } else {
        echo "Aula não encontrada.";
    }
} else {
    echo "ID da aula não fornecido.";
}

$conexao->close();
?>
