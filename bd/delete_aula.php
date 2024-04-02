<?php

include 'conexao.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id_aula = $_GET['id'];
    
    $sql = "DELETE FROM aulas WHERE id = ?";
    
    $stmt = $conexao->prepare($sql);
    
    $stmt->bind_param("i", $id_aula);
    
    if ($stmt->execute()) {

        header("Location: ../aula.php");
        exit();
    } else {
        echo "Erro ao excluir a matéria: " . $conexao->error;
    }
} else {
    echo "ID da matéria não fornecido.";
}

$conexao->close();
?>
