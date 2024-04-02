<?php

include 'conexao.php';

$erro_materia = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["materia"];
    $professor = $_POST["professor"];
    $segunda = isset($_POST["segunda"]) ? 1 : 0;
    $terca = isset($_POST["terca"]) ? 1 : 0;
    $quarta = isset($_POST["quarta"]) ? 1 : 0;
    $quinta = isset($_POST["quinta"]) ? 1 : 0;
    $sexta = isset($_POST["sexta"]) ? 1 : 0;
    $sabado = isset($_POST["sabado"]) ? 1 : 0;
    $domingo = isset($_POST["domingo"]) ? 1 : 0;
    $hora = $_POST["hora"];
    
    $sql = "INSERT INTO materias (nome, professor, segunda, terca, quarta, quinta, sexta, sabado, domingo, hora) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssssssssss", $nome, $professor, $segunda, $terca, $quarta, $quinta, $sexta, $sabado, $domingo, $hora);
    
    if ($stmt->execute()) {

        header("Location: ../materia.php");
        exit();

    } else {
        $erro_materia = "Erro ao cadastrar matéria: " . $conexao->error;
    }
}

$conexao->close();

?>

<script>
    setTimeout(function(){
        window.location.href = "./materia.php";
    }, 1000);
</script>
