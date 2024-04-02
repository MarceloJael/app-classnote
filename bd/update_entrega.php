<?php
include 'conexao.php';

$erro_materia = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $id_materia = $_POST["materia_id"];
    $tipo_entrega = $_POST["tipo_entrega"];
    $data_entrega = $_POST["data"];
    $status_entrega = $_POST["status_entrega"];
    $anotacao = $_POST["anotacao"];
    $link_entrega = $_POST["link_entrega"];
    $nota_entrega = $_POST["nota_entrega"];
    $id_entrega = $_POST["id_entrega"];
    
    $sql = "UPDATE entregas SET materia_id = ?, tipo_entrega = ? , data_entrega = ?, status_entrega = ?, anotacao_entrega = ?, link_entrega = ?, nota_entrega = ? WHERE id=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("issssssi", $id_materia, $tipo_entrega, $data_entrega, $status_entrega, $anotacao, $link_entrega, $nota_entrega, $id_entrega);
    
    if ($stmt->execute()) {
        header("Location: ../entrega.php");
        exit();
    } else {
        $erro_materia = "Erro ao atualizar entregas: " . $conexao->error;
    }
}

$conexao->close();
?>
