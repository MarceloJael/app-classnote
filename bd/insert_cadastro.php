<?php

include 'conexao.php';

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $instituicao = $_POST["instituicao"];
    $privacidade = isset($_POST["privacidade"]) ? 1 : 0;
    $comunicacao = isset($_POST["comunicacao"]) ? 1 : 0;
    
    $sql = "INSERT INTO users (nome, sobrenome, email, senha, instituicao, privacidade, comunicacao) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssss", $nome, $sobrenome, $email, $senha, $instituicao, $privacidade, $comunicacao);
    
    if ($stmt->execute()) {

        header("Location: ../index.php");
        exit();

    } else {
        $erro = "Erro ao cadastrar usuário: " . $conexao->error;
    }
}

$conexao->close();

?>
