<?php

include 'conexao.php';

$erro_aula = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id_materia = $_POST["materia_id"];
    $data = $_POST["data"];
    $anotacao = $_POST["anotacao"];
    $link_aula = $_POST["link_aula"];
    $numero_aula = $_POST["numero_aula"];
    
    $sql = "INSERT INTO aulas (materia_id, data_aula, anotacao, link_aula, numero_aula) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssssi", $id_materia, $data, $anotacao, $link_aula, $numero_aula);
    
    if ($stmt->execute()) {

        header("Location: ../aula.php");
        exit();

    } else {
        $erro_materia = "Erro ao cadastrar aula: " . $conexao->error;
    }
}

$conexao->close();

?>

<script>
    setTimeout(function(){
        window.location.href = "./aula.php";
    }, 1000);
</script>
