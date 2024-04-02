<?php

include 'conexao.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id_materia = $_GET['id'];
    
    $sql = "DELETE FROM materias WHERE id = ?";
    
    $stmt = $conexao->prepare($sql);
    
    $stmt->bind_param("i", $id_materia);
    
    if ($stmt->execute()) {

        header("Location: ../materia.php");
        exit();
    } else {
        echo "Erro ao excluir a matéria: " . $conexao->error;
    }
} else {
    echo "ID da matéria não fornecido.";
}

$conexao->close();
?>
