<?php
include 'conexao.php';

$erro_materia = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id_materia = $_POST["materia_id"];
    $data = $_POST["data"];
    $anotacao = $_POST["anotacao"];
    $link_aula = $_POST["link_aula"];
    $id_aula = $_POST["id_aula"];
    $numero_aula = $_POST["numero_aula"];

    $sql = "UPDATE aulas SET materia_id=?, data_aula=?, anotacao=?, link_aula=?, numero_aula = ? WHERE id=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("isssii", $id_materia, $data, $anotacao, $link_aula, $id_aula, $numero_aula);
    
    if ($stmt->execute()) {
        header("Location: ../aula.php");
        exit();
    } else {
        $erro_materia = "Erro ao atualizar aula: " . $conexao->error;
    }
}

$conexao->close();
?>
