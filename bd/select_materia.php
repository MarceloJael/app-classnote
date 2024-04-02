<?php
session_start();
include 'conexao.php';

$erro_materia = "";

if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id_materia = $_GET['id'];

    $sql = "SELECT * FROM materias WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $id_materia);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();

        $id_materia = $row['id'];
        $nome_materia = $row['nome'];
        $nome_professor = $row['professor'];
        $segunda = $row['segunda'];
        $terca = $row['terca'];
        $quarta = $row['quarta'];
        $quinta = $row['quinta'];
        $sexta = $row['sexta'];
        $sabado = $row['sabado'];
        $domingo = $row['domingo'];
        $hora = $row['hora'];   
        
        header("Location: ../materia.php?id=$id_materia&nome=$nome_materia&professor=$nome_professor&segunda=$segunda&terca=$terca&quarta=$quarta&quinta=$quinta&sexta=$sexta&sabado=$sabado&domingo=$domingo&hora=$hora");
        exit();

    } else {
        echo "Matéria não encontrada.";
    }
} else {
    echo "ID da matéria não fornecido.";
}

$conexao->close();
?>
