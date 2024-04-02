<?php

include 'conexao.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id_entrega = $_GET['id'];
    
    $sql = "DELETE FROM entregas WHERE id = ?";
    
    $stmt = $conexao->prepare($sql);
    
    $stmt->bind_param("i", $id_entrega);
    
    if ($stmt->execute()) {

        header("Location: ../entrega.php");
        exit();
    } else {
        echo "Erro ao excluir a entrega: " . $conexao->error;
    }
} else {
    echo "ID da entrega não fornecido.";
}

$conexao->close();
?>
