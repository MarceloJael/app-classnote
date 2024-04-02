<?php
session_start();
include 'conexao.php';

$erro_entrega = "";

if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id_entrega = $_GET['id'];

    $sql = "SELECT * FROM entregas WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id_entrega);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();

        $id_entrega = $row['id'];
        $id_materia = $row['materia_id'];
        $tipo_entrega = $row['tipo_entrega'];
        $data_entrega = $row['data_entrega'];
        $status_entrega = $row['status_entrega'];
        $anotacao_entrega = $row['anotacao_entrega'];
        $link_entrega = $row['link_entrega'];
        $nota_entrega = $row['nota_entrega'];
        
        header("Location: ../entrega.php?id=$id_entrega&materia_id=$id_materia&tipo_entrega=$tipo_entrega&data_entrega=$data_entrega&status_entrega=$status_entrega&anotacao_entrega=$anotacao_entrega&link_entrega=$link_entrega&nota_entrega=$nota_entrega");
        exit();

    } else {
        echo "Entrega não encontrada.";
    }
} else {
    echo "ID da Entrega não fornecido.";
}

$conexao->close();
?>
